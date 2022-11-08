<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;


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
    Route::get('/profil-add',[AuthController ::class,'profil_add'])->name('profil_add');
    Route::post('/profil-add',[AuthController ::class,'profil_store'])->name('profil_store');

    //****Setting****
    Route::get('/setting',[SettingController ::class,'index'])->name('setting');


    Route::get('/logout',[AuthController ::class,'logout'])->name('logout');
});


});

Route::get('/',[FrontController::class,'index'])->name('index');