<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Carbon\Carbon;

class ContactController extends Controller
{
    //index
    public function index()
    {
        $contact = Contact::where('id','1')->first();
        return view('cms.contact', compact('contact'));
    }

    // update
    public function update(Request $request)
    {
        $contact = Contact::where('id','1')->update([
            'title' => $request->title,
            'title_contact' => $request->title_contact,
            'title_address' => $request->title_address,
            'title_working' => $request->title_working,
            'title_message' => $request->title_message,
            'updated_at' => Carbon::now(),
        ]);

        toastr()->success('Data has been updated successfully!');
        return redirect()->route('contact');
    }
}
