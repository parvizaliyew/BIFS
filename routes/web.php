<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProductController;
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

    //**** Projects ****/
    Route::get('/projects',[\App\Http\Controllers\Admin\ProjectController::class,'index'])->name('project');
    Route::get('/project-create',[\App\Http\Controllers\Admin\ProjectController ::class,'create'])->name('project.create');
    Route::post('/project-store',[\App\Http\Controllers\Admin\ProjectController ::class,'store'])->name('project.store');
    Route::get('/project-edit/{id}',[\App\Http\Controllers\Admin\ProjectController ::class,'edit'])->name('project.edit');
    Route::post('/project-store/{id}',[\App\Http\Controllers\Admin\ProjectController ::class,'update'])->name('project.update');
    Route::get('/project-delete/{id}',[\App\Http\Controllers\Admin\ProjectController ::class,'destroy'])->name('project.destroy');

     //**** Brends ****/
    Route::get('/brends',[\App\Http\Controllers\Admin\BrendController::class,'index'])->name('brend');
    Route::get('/brend-create',[\App\Http\Controllers\Admin\BrendController ::class,'create'])->name('brend.create');
    Route::post('/brend-store',[\App\Http\Controllers\Admin\BrendController ::class,'store'])->name('brend.store');
    Route::get('/brend-edit/{id}',[\App\Http\Controllers\Admin\BrendController ::class,'edit'])->name('brend.edit');
    Route::post('/brend-store/{id}',[\App\Http\Controllers\Admin\BrendController ::class,'update'])->name('brend.update');
    Route::get('/brend-delete/{id}',[\App\Http\Controllers\Admin\BrendController ::class,'destroy'])->name('brend.destroy');


    //Products
    Route::get('/products',[ProductController::class,'index'])->name('product');
    Route::get('/product-create',[ProductController::class,'create'])->name('product.create');
    Route::post('/product-store',[ProductController ::class,'store'])->name('product.store');
    Route::get('/product-destroy/{id}',[ProductController ::class,'destroy'])->name('product.destroy');
    Route::get('product-edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::post('/product-update{id}',[ProductController ::class,'update'])->name('product.update');

    //Counter
    Route::get('/counters',[CounterController::class,'index'])->name('counter');
    Route::post('/counter-update{id}',[CounterController ::class,'update'])->name('counter.update');

    //Messages
    Route::get('/messages',[MessageController::class,'index'])->name('message');
    Route::get('/message-destroy/{id}',[MessageController ::class,'destroy'])->name('message.destroy');
    Route::get('message-edit/{id}',[MessageController::class,'edit'])->name('message.edit');
    
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
});


});

//********* FRONT *********//
Route::get('/',[FrontController::class,'index'])->name('index.az');
Route::get('/en',[FrontController::class,'index'])->name('index.en');

Route::get('/mehsullar',[FrontController::class,'product'])->name('product.az');
Route::get('/en/products',[FrontController::class,'product'])->name('product.en');

Route::get('/mehsul/{slug}',[FrontController::class,'product_details'])->name('product_details.az');
Route::get('/en/product/{slug}',[FrontController::class,'product_details'])->name('product_details.en');

Route::get('/elaqe',[FrontController::class,'contact'])->name('contact.az');
Route::get('/en/contact',[FrontController::class,'contact'])->name('contact.en');

Route::post('/elaqe',[FrontController::class,'contact_post'])->name('contact_post.az');
Route::post('/en/contact',[FrontController::class,'contact_post'])->name('contact_post.en');

Route::get('/layiheler',[FrontController::class,'project'])->name('project.az');
Route::get('/en/projects',[FrontController::class,'project'])->name('project.en');

Route::get('/haqqimizda',[FrontController::class,'about'])->name('about.az');
Route::get('/en/about',[FrontController::class,'about'])->name('about.en');

Route::get('/layihe/{slug}',[FrontController::class,'project_details'])->name('project_details.az');
Route::get('/en/project/{slug}',[FrontController::class,'project_details'])->name('project_details.en');