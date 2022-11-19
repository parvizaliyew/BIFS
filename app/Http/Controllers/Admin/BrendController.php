<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BrendController extends Controller
{
    public function index()
    {
        $brends=Brend::all();
        return view('admin.pages.brend.index',compact('brends'));
    }

    public function create()
    {
        return view('admin.pages.brend.create');
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
            $fileNameWithUpload='storage/brends/'.$fileName;

            $request->img->storeAs('public/brends/',$fileName);

            $brend=new Brend();
            $brend->img=$fileNameWithUpload;
            $brend->save();

            toastr()->success('Brendiniz  uğurla əlavə olundu');
            return redirect()->route('admin.brend');
        }
    }

    public function edit($id)
    {
        $brend=Brend::findOrFail($id);
        return view('admin.pages.brend.edit',compact('brend'));
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

        $brend=Brend::findOrFail($id);


        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/brends/'.$fileName;

            $request->img->storeAs('public/brends/',$fileName);

            if(File::exists($brend->img))
            {
                File::delete($brend->img);
            }

            $brend->img=$fileNameWithUpload;
            $brend->save();

            toastr()->success('Brendiniz uğurla yeniləndi');
            return redirect()->route('admin.brend');
        }}

    public function destroy($id)
    {
        $brend=Brend::findOrFail($id);


        if(File::exists($brend->img))
        {
            File::delete($brend->img);
        }
        $brend->delete();
        toastr()->success('Brendiniz  uğurla silindi');
        return redirect()->route('admin.brend');
    }
}
