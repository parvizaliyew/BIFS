<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    public function index()
    {
        $partners=Partner::all();
     return view('admin.pages.partner.index',compact('partners'));   
    }

    public function create()
    {
        return view('admin.pages.partner.create');
    }

    public function store(Request $request)
    {
        $data=[
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,[
            'img'=>'required|mimes:jpg,png,svg,webp',
        ],
        [
            'img.required'=>'Şəkili daxil edin',
            'img.mimes'=>'Şəkil png , jpg , svg , webp formatinda olmalidi',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/partners/'.$fileName;

            $request->img->storeAs('public/partners/',$fileName);

            $partner=new Partner;
            $partner->img=$fileNameWithUpload;
            $partner->save();

            toastr()->success('Partnyorunuz  uğurla əlavə olundu');
            return redirect()->route('admin.partner');
    }
     }

     public function edit($id)
     {
        $partner=Partner::findOrFail($id);
        return view('admin.pages.partner.edit',compact('partner'));
     }

     public function update(Request $request, $id)
     {
        $data=[
            'img'=>$request->img,
        ];

        $validator =Validator::make($data,[
            'img'=>'required|mimes:jpg,png,svg,webp',
        ],
        [
            'img.required'=>'Şəkili daxil edin',
            'img.mimes'=>'Şəkil png , jpg , svg , webp formatinda olmalidi',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }

        $partner=Partner::findOrFail($id);


        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/partners/'.$fileName;
           
            $request->img->storeAs('public/partners/',$fileName);

            if(File::exists($partner->img))
            {
                File::delete($partner->img);
            }
            
            $partner->img=$fileNameWithUpload;
            $partner->save();

            toastr()->success('Partnyorunuz  uğurla yeniləndi');
            return redirect()->route('admin.partner');
     }}

     public function destroy($id)
     {
        $partner=Partner::findOrFail($id);

      
        if(File::exists($partner->img))
            {
                File::delete($partner->img);
            }
        $partner->delete();
        toastr()->success('Partnyorunuz uğurla silindi');
        return redirect()->route('admin.partner');
     }
}