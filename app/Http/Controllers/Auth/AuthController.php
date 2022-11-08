<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function signin_post(Request $request)
    {
        $data= [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        $validator =Validator::make($data,[
        'email'=>'required|email',
        'password'=>'required',
        ]);

        if($validator->fails())
        {
            toastr()->error('Zəhmət olmasa bütün xanaları düzgün formatda doldurun.');
            return redirect()->back();
        }

        if (Auth::attempt($data))
        {
        toastr()->success('Uğurla giriş etdiniz.');
        return redirect()->route('admin.index');
        }
        
        else
        {
            toastr()->error('İstifadəçi məlumatları doğru deyil.');
            return redirect()->back();
        }
    }

        public function logout()
        {
            Auth::logout();
            return redirect()->route('index');
        }

        public function profil_update()
        {
            return view('auth.profil_update');
        }

        public function profilupdate_post(Request $request)
        {
            $oldpassword=Auth::user()->password;
            $validator = Validator::make($request->all(),[
                'email'=>'required|email',
                'name'=>'required',
                'lname'=>'required'
            ],
            [
                'email.required'=>'Emailinizi daxil edin',
                'name.required'=>'Adınızı daxil edin',
                'lname.required'=>'Soyadınızı daxil edin',
                'email.email'=>'Emailinizi düzgün formatda deyil',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }
                $user = User::find(auth()->user()->id);
               
               
                if($request->has('reset_password')){
                    if($request->reset_password=='')
                    {
                        $user->name=$request->name;
                        $user->lname=$request->lname;
                        $user->email=$request->email; 
                        $user->save();
                        toastr()->success('Profil məlumatlarınız yeniləndi');
                        return redirect()->back();
                    }
                     if($request->reset_password == $request->confirm_password){
                        $user->name=$request->name;
                        $user->lname=$request->lname;
                        $user->email=$request->email; 
                        $user->password=Hash::make($request->reset_password);
                        $user->save();
                        toastr()->success('Profil məlumatlarınız yeniləndi');
                        return redirect()->back();
                        }

                        else{
                            toastr()->warning('Parolunuzu təsdiqləyin');
                            return redirect()->back();
                        }  
                }
        }
        
        public function profil_add()
        {
            return view('auth.profil_add');
        }

        public function profil_store(Request $request)
        {
            $validator = Validator::make($request->all(),[
                'email'=>'required|email',
                'name'=>'required',
                'lname'=>'required',
                'password'=>'required',
                'role'=>'required'
            ],
            [
                'email.required'=>'Emaili daxil edin',
                'name.required'=>'Adı daxil edin',
                'lname.required'=>'Soyadı daxil edin',
                'email.email'=>'Email düzgün formatda deyil',
                'password.required'=>'Şifrəni daxil edin',
                'role.required'=>'Rolu daxil edin',

            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $user=new User;
            $user->name=$request->name;
            $user->lname=$request->lname;
            $user->password=Hash::make($request->password);
            $user->email=$request->email;
            $role=$request->role;
            $user->assignRole($role);
            $user->save();
            toastr()->success('Yeni profil elave olundu');
            return redirect()->back();
        }
}
