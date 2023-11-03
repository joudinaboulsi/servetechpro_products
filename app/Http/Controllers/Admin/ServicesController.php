<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\ServicePage;
use Carbon\Carbon;

class ServicesController extends Controller
{
    // index
    public function index()
    {
        $service = ServicePage::where('id','1')->first();
        $services = Service::all();
        return view('cms.services.index', compact('service','services'));
    }
    
    // update header
    public function updateHeader(Request $request)
    {
        ServicePage::where('id','1')->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'text' => $request->text,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('services');
    }

    // create
    public function create()
    {
        return view('cms.services.create');
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
            $photo->move('assets/img/services', $newPhoto);
        }

        Service::insert([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $newPhoto,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('services');
    }

    // edit
    public function edit($id)
    {
        $service = Service::find($id);
        return view('cms.services.edit', compact('service'));
    }

    // update
    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/services', $newPhoto);
        }
        else {
            $newPhoto = $service->image;
        }

        Service::where('id',$id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $newPhoto,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('services');
    }

    // delete
    public function delete($id)
    {
        Service::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('services');
    }
}