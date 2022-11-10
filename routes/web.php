<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;

$locale = Request::segment(1);

if(in_array($locale, ['az','en'])){
    App::setLocale($locale);
}else{
    App::setLocale('az');

    $locale = '';
}

Route::name('admin.')->prefix('/admin')->group(function () {

Route::group(['middleware' => 'isLogin'],function()
{

    Route::get('/login',[AuthController::class,'index'])->name('login');
    Route::post('/login-post',[AuthController::class,'signin_post'])->name('login_post');

});

Route::group(['middleware' => 'notLogin'],function()
{

    Route::get('/index',[DashboardController::class,'index'])->name('index');

    //****Auth****
    Route::get('/profil-update',[AuthController ::class,'profil_update'])->name('profil_update');
    Route::post('/profil-update',[AuthController ::class,'profilupdate_post'])->name('profilupdate_post');
    Route::get('/profil-add',[AuthController ::class,'profil_add'])->middleware(['role:admin'])->name('profil_add');
    Route::post('/profil-add',[AuthController ::class,'profil_store'])->name('profil_store');

    //****Setting****
    Route::get('/setting',[SettingController ::class,'index'])->name('setting');
    Route::post('/setting',[SettingController ::class,'setting_post'])->name('setting_post');


    //**** Partners ****/
    Route::get('/partners',[PartnerController ::class,'index'])->name('partner');
    Route::get('/partners-create',[PartnerController ::class,'create'])->name('partner.create');
    Route::post('/partners-store',[PartnerController ::class,'store'])->name('partner.store');
    Route::get('/partners-edit/{id}',[PartnerController ::class,'edit'])->name('partner.edit');
    Route::post('/partners-store/{id}',[PartnerController ::class,'update'])->name('partner.update');
    Route::get('/partners-delete/{id}',[PartnerController ::class,'destroy'])->name('partner.destroy');







    Route::get('/logout',[AuthController ::class,'logout'])->name('logout');
});


});

Route::get('/',[FrontController::class,'index'])->name('index');