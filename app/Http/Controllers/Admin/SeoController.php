<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use Carbon\Carbon;

class SeoController extends Controller
{
    // index
    public function index(){
        $page = Page::where('id','1')->first();
        return view('cms.seo', compact('page'));
    }

    // seo
    public function seo(Request $request)
    {
        $page = Page::where('id','1')->first();

        $newPhoto = '';
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $newPhoto = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets/img/page', $newPhoto);
        }
        else {
            $newPhoto = $page->image;
        }

        $page = Page::where('id','1')->update([
            'meta_title' => $request->meta_title,
            'image' => $newPhoto,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('seo');
    }
}
