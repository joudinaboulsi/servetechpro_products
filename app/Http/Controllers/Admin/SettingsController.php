<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;
use Carbon\Carbon;

class SettingsController extends Controller
{
    // index
    public function index()
    {
        $settings = Settings::where('id','1')->first();
        return view('cms.settings', compact('settings'));
    }

    // update
    public function update(Request $request)
    {
        $settings = Settings::where('id','1')->first();

        $logo = '';
        if ($request->hasFile('logo')) {
            $photo = $request->file('logo');
            $logo = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $photo->getClientOriginalName()
            );
            $photo->move('assets', $logo);
        }
        else {
            $logo = $settings->logo;
        }

        $filename = '';
        if ($request->hasFile('brochure') ) {
            $file = $request->file('brochure');
            $filename = str_replace(
                '/[^A-Za-z0-9]/',
                '-',
                time() . $file->getClientOriginalName()
            );
            $file->move('assets', $filename);
        }
        else {
            $filename = $settings->brochure;
        }

        Settings::where('id', '1')->update([
            'logo' => $logo,
            'name' => $request->name,
            'phone_one' => $request->phone_one,
            'phone_two' => $request->phone_two,
            'email' => $request->email,
            'address' => $request->address,
            'working_days' => $request->working_days,
            'working_hours' => $request->working_hours,
            'days_closed' => $request->closed_days,
            'closed' => $request->closed,
            'map' => $request->map,
            'brochure' => $filename,
            'updated_at' => Carbon::now(),
        ]);
        
        toastr()->success('Data has been updated successfully!');
        return redirect()->route('settings');
    }
}
