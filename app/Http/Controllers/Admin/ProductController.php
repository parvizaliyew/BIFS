<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::get();
        return view('admin.pages.product.index',compact('products'));
    }
    public function create()
    {
        return view('admin.pages.product.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'desc'=>'required',
            'img'=>'required|mimes:jpg,png,svg,webp',
            'logo'=>'required|mimes:jpg,png,svg,webp',
            'images'=>'required|array',
            'images.*'=>'required|image|mimes:jpg,png,svg,jpeg',
        ],
        [
            'title.required'=>'Baslığı  daxil edin',
            'desc.required'=>'Mətni  daxil edin',
            'img.required'=>'Şəkili daxil edin',
            'logo.required'=>'logonu  daxil edin',
            'img.mimes'=>'Şəkil png , jpg , svg , webp formatinda olmalidi',
            'images.required'=>'Şəkillər daxil edin',

        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $product=new Product();


        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/products/'.$fileName;

            $request->img->storeAs('public/products/',$fileName);
            $product->img=$fileNameWithUpload;
        }

        if($request->has('logo'))
        {
            $ext=$request->logo->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/products/'.$fileName;

            $request->logo->storeAs('public/products/',$fileName);
            $product->logo=$fileNameWithUpload;
        }


        $images=[];
        foreach($request->images as $file )
        {
            $ext=$file->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/products/'.$fileName;
            $file->storeAs('public/products/',$fileName);
            $images[]=$fileNameWithUpload;
        }
     $data['slug'] = [];
     foreach (json_decode($request->title) as $key => $title) {
         $data['slug'][$key] = Str::slug($title);
     }

     $product->img=$fileNameWithUpload;
     $product->images=implode('|',$images);
     $product->title=$request->title;
     $product->desc=$request->desc;
     $product->slug=$data['slug'];
     $product->save();

     toastr()->success('Məhsulunuz uğurla əlavə olundu');
     return redirect()->route('admin.product');
    }

    public function edit($id)
    {
        $product=Product::findOrFail($id);
        return view('admin.pages.product.edit',compact('product'));
    }
    public  function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'desc'=>'required',
            'img'=>'mimes:jpg,png,svg,webp',
            'logo'=>'mimes:jpg,png,svg,webp',
            'images'=>'array',
            'images.*'=>'image|mimes:jpg,png,svg,jpeg',
        ],
            [
                'title.required'=>'Baslığı  daxil edin',
                'desc.required'=>'Mətni  daxil edin',
                'img.required'=>'Şəkili daxil edin',
                'img.mimes'=>'Şəkil png , jpg , svg , webp formatinda olmalidi',
                'images.required'=>'Şəkillər daxil edin',
            ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $product=Product::findOrFail($id);

        if($request->has('img'))
        {
            $ext=$request->img->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/products/'.$fileName;
            if(File::exists($product->img))
            {
                File::delete($product->img);
            }
            $request->img->storeAs('public/products/',$fileName);
            $product->img=$fileNameWithUpload;
        }
        if($request->has('logo'))
        {
            $ext=$request->logo->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/products/'.$fileName;
            if(File::exists($product->logo))
            {
                File::delete($product->logo);
            }
            $request->logo->storeAs('public/products/',$fileName);
            $product->logo=$fileNameWithUpload;
        }
if ($request->has('images'))
{
        $images=[];
        foreach($request->images as $file )
        {
            $ext=$file->extension();
            $fileName=rand(1,100).time().'.'.$ext;
            $fileNameWithUpload='storage/products/'.$fileName;
            $file->storeAs('public/products/',$fileName);
            if(File::exists($product->images))
            {
                File::delete($product->images);
            }
            $images[]=$fileNameWithUpload;

        }
    $product->images=implode('|',$images);

}
        $data['slug'] = [];
        foreach (json_decode($request->title) as $key => $title) {
            $data['slug'][$key] = Str::slug($title);
        }

        $product->title=$request->title;
        $product->desc=$request->desc;
        $product->slug=$data['slug'];
        $product->save();

        toastr()->success('Məhsulunuz uğurla yeniəndi');
        return redirect()->route('admin.product');
    }
    public function destroy($id)
    {
        $product=Product::findOrFail($id);

        if(File::exists($product->img))
            {
                File::delete($product->img);
            }
        if(File::exists($product->images))
            {
                File::delete($product->images);
            }
        if(File::exists($product->logo))
        {
            File::delete($product->logo);
        }
        $product->delete();
        toastr()->success('Məhsulunuz uğurla silindi');
        return redirect()->route('admin.product');
    }
}
