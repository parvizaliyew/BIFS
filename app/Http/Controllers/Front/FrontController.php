<?php

namespace App\Http\Controllers\Front;

use App\Models\Brend;
use App\Models\Counter;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        $partners=Partner::get();
        $counter=Counter::first();
        $brends=Brend::get();
        $products=Product::get();
        $projects=Project::orderBy('created_at','desc')->take(3)->get();
        return view('front.index',compact('partners','projects','brends','products','counter'));
    }

    public function product()
    {
        $products=Product::get();
        return view('front.product',compact('products'));
    }

    public function product_details($slug)
    {
        $product=Product::whereJsonContains('slug->az',$slug)->orWhereJsonContains('slug->en',$slug)->first();
        return view('front.product-details',compact('product'));
    }

    public function project()
    {
        $projects=Project::orderBy('id','DESC')->get();
        return view('front.project',compact('projects'));
    }
    public function contact()
    {
        $contact=Setting::first();
        return view('front.contact',compact('contact'));
    }

    public function contact_post(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'msj'=>'required',
            'email'=>'required|email',
            'title'=>'required',
        ],
        [
            'name.required' =>    __('lang.ad_required'),
            'title.required'      => __('lang.basliq_required'),
            'email.required'    => __('lang.email_required'),
            'email.email'         => __('lang.email_email'),
            'msj.required'=>__('lang.mesaj_required'),
        ]);



        if($validator->fails()){
            return  redirect()->back()->withErrors($validator);
        }
     $message = new Message;
            $message->name    = $request->name;
            $message->email   = $request->email;
            $message->title   = $request->title;
            $message->msj     = $request->msj;
    
            $email = "eliyevperviz466@gmail.com";
            $title= 'BIFS saytindan mesaj var';
    
            $data = [
                'email'  => $request->email,
                'title'  => $request->title,
                'name'  => $request->name,
                'msj'  => $request->msj,
            ];
            Mail::send('mail.sendmail', $data, function($m) use ($title,$email) {
                $m->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
                $m->to($email, env('MAIL_FROM_NAME') )->subject($title);
            });
            
                $message->save();
                toastr()->success('Mesajınız uğurla göndərildi');
                return redirect()->back();
    
              
        
    }
}
