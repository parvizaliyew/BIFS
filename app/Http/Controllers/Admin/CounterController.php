<?php

namespace App\Http\Controllers\Admin;

use App\Models\Counter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CounterController extends Controller
{
    public function index()
    {
        $counter=Counter::first();
        return view('admin.pages.counter.index',compact('counter'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'experince'=>'required',
            'count'=>'required',
            'partners'=>'required',
            'product'=>'required',

        ],
        [
            'experince.required'=>'BU SAHƏDƏ TƏCRÜBƏMİZi daxil edin',
            'count.required'=>'LAYİHƏLƏRİMİZİN SAYI daxil edin',
            'partners.required'=>'PARTNYORLARIMIZIN SAYI daxil edin',
            'product.required'=>'MƏHSUL ÇEŞİDİ daxil edin',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $counter=Counter::first();
        $counter->experince=$request->experince;
        $counter->count=$request->count;
        $counter->partners=$request->partners;
        $counter->product=$request->product;
        $counter->save();

        toastr()->success('Counter yeniləndi');
        return redirect()->back();
    }
}
