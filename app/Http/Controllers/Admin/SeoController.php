<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\FileUploadHelper;

use App\Page;
use Carbon\Carbon;

class SeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = Page::all();
        return view('cms.seo.index', compact('pages'));
    }

    public function edit($id)
    { 
        $page = Page::findOrFail($id);
        return view('cms.seo.seo', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/seo/');
        if($image!=null)
            $page->update(['image' => $image]);

        $page->update([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been saved successfully!');

        return redirect()->route('seo');
    }
}
