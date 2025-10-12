<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(){

        return view('settings.setting')->with('settings', Setting::first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'site_name' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required',
            'fax' => 'required',
            'address' => 'required',
        ]);
        $settings = Setting::first();

        $settings->site_name = $request->site_name;
        $settings->contact_phone = $request->contact_phone;
        $settings->contact_email = $request->contact_email;
        $settings->fax = $request->fax;
        $settings->address = $request->address;

        $settings->save();

        return redirect()->back()->with('status', 'Settings updated!');


    }


}
