<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $setting=Setting::first();
        return view('admin.pages.setting.index',compact('setting'));
    }

    public function setting_post(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'phone_1'=>'required',
            'phone_2'=>'required',
            'adress'=>'required',
            'fb'=>'required',
            'ins'=>'required'

        ],
        [
            'email.required'=>'Emaili daxil edin',
            'phone_1.required'=>'Telefon 1 daxil edin',
            'phone_2.required'=>'Telefon 2 ni daxil edin',
            'email.email'=>'Email düzgün formatda deyil',
            'fb.required'=>'Facebooku daxil edin',
            'ins.required'=>'İnstagramı daxil edin',
            'adress.required'=>'Ünvanı daxil edin',


        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $setting=Setting::first();
        $setting->phone_1=$request->phone_1;
        $setting->phone_2=$request->phone_2;
        $setting->email=$request->email;

        $setting->fb=$request->fb;
        $setting->ins=$request->ins;
        $setting->adress=$request->adress;
        $setting->save();

        toastr()->success('Ayarlarınız yeniləndi');
        return redirect()->back();

    }
}
