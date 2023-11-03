<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SectionOne;
use App\SectionTwo;
use Carbon\Carbon;

class SectionsController extends Controller
{
    //index section one
    public function index()
    {
        $section= SectionOne::where('id','1')->first();
        return view('cms.section1', compact('section'));
    }
 
    // update
    public function update(Request $request)
    {
        $section= SectionOne::where('id','1')->first();

        $newPhoto = '';
        if ($request->hasFile('image_one')) {
            $photo = $request->file('image_one');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/section1', $newPhoto);
        }
        else {
            $newPhoto = $section->image_one;
        }

        $newLogo = '';
        if ($request->hasFile('logo')) {
            $photoLogo = $request->file('logo');
            $newLogo = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photoLogo->getClientOriginalName()
            );
            $photoLogo->move('assets/img/section2', $newLogo);
        }
        else {
            $newLogo = $section->logo;
        }

        SectionOne::where('id','1')->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link_one' => $request->link_one,
            'image_one' => $newPhoto,
            'link_two' => $request->link_two,
            'logo' => $newLogo,
            'counter' => $request->counter,
            'counter_title' => $request->counter_title,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('sectionOne');
    }

    //index section two
    public function index_section_two()
    {
        $section = SectionTwo::where('id','1')->first();
        return view('cms.section2', compact('section'));
    }
    
    // update section two
    public function update_section_two(Request $request)
    {
        $section = SectionTwo::where('id','1')->first();

        $newPhoto = '';
        if ($request->hasFile('image_one')) {
            $photo = $request->file('image_one');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/section2', $newPhoto);
        }
        else {
            $newPhoto = $section->image_one;
        }

        $newImage = '';
        if ($request->hasFile('image_two')) {
            $image = $request->file('image_two');
            $newImage = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $image->getClientOriginalName()
            );
            $image->move('assets/img/section2', $newImage);
        }
        else {
            $newImage = $section->image_two;
        }

        SectionTwo::where('id','1')->update([
            'title' => $request->title,
            'main_title' => $request->main_title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'link' => $request->link,
            'image_one' => $newPhoto,
            'image_two' => $newImage,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('sectionTwo');
    }
}
