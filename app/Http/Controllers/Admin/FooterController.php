<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Footer;
use Auth;
use Carbon\Carbon;

class FooterController extends Controller
{
    //index
    public function index()
    {
        $footer = Footer::where('id','1')->first();;
        return view('cms.footer', compact('footer'));
    }

    // update
    public function update(Request $request)
    {
        $footer = Footer::where('id','1')->update([
            'subtitle' => $request->subtitle,
            'title' => $request->title,
            'text' => $request->text,
            'link' => $request->link,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('footer');
    }
}
