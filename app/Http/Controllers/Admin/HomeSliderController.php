<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HomeSlider;
use Carbon\Carbon;

class HomeSliderController extends Controller
{
    // index
    public function index()
    {
        $home_sliders = HomeSlider::all();
        return view('cms.home_slider.index', compact('home_sliders'));
    }

    // create
    public function create()
    {
        return view('cms.home_slider.create');
    }

    // store
    public function store(Request $request)
    {
        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/homeSlider/', $newPhoto);
        }

        $home_slider = HomeSlider::insert([
            'title' => $request->title,
            'content' => $request->content,
            'subtitle' => $request->subtitle,
            'image' => $newPhoto,
            'link' => $request->link,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('homeSlider');
    }

    // edit
    public function edit($id)
    {
        $home = HomeSlider::findOrFail($id);
        if (!$home) {
            toastr()->error('Something went wrong');
            return redirect()->route('homeSlider');
        }

        return view('cms.home_slider.edit', compact('home'));
    }

    // update
    public function update(Request $request, $id)
    {
        $home = HomeSlider::findOrFail($id);

        $newPhoto = '';
        if ($request->has('image') && $request->image != null) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/homeSlider/', $newPhoto);
        }
        else {
            $newPhoto = $home->image;
        }

        HomeSlider::where('id', $id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $newPhoto,
            'content' => $request->content,
            'link' => $request->link,
            'updated_at' => Carbon::now(),
        ]);
        toastr()->success('Data has been updated successfully!');

        return redirect()->route('homeSlider');
    }

    // delete
    public function destroy($id)
    {
        HomeSlider::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('homeSlider');
    }
}