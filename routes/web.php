<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\Uicontroller;
use App\Models\contactaUs;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Uicontroller::class,"index"])->name('home');
Route::get('/about', [Uicontroller::class,"about"])->name('about');
Route::get('/services', [Uicontroller::class,"services"])->name('service');
Route::get('/contact', [Uicontroller::class,"contact"])->name('contactform');

Route::post('admin/appointment',[Uicontroller::class,'saveAppointment'])->name('appointment.store');


 // admin panel 


Route::get('/admin',[AdminController::class ,"index"]);
Route::get('/admin/setting',[AdminController::class ,"getSetting"]);
// Route::post('/admin/update-setting',[AdminController::class ,"updateSetting"]);


Route::get('admin/appointment',[AdminController::class,'getappointment'])->name('appointment');
Route::get('admin/appointment/delete/{id}',[AdminController::class,'deleteAppointment']);

// get team
Route::get('admin/teams',[AdminController::class,'getteam'])->name('team');
// add team 
Route::get('admin/teamadd',[AdminController::class,'addteam'])->name('team.add');
Route::post('admin/teamstore',[AdminController::class,'storeteam'])->name('team.store');
// update team
Route::get('admin/getupdate/{id}',[AdminController::class,'getupdate'])->name('team.getupdate');
Route::post('admin/updatetaam/{id}',[AdminController::class,'updateteam'])->name('team.update');
// delete team 
Route::get('admin/teamdelete/{id}',[AdminController::class,'teamdelete']);

// route for blog
// get blog
Route::get('admin/blog',[AdminController::class,'getblog'])->name('blog');
// add blog 
Route::get('admin/blogadd',[AdminController::class,'addblog'])->name('blog.add');
Route::post('admin/blogstore',[AdminController::class,'storeblog'])->name('blog.store');
// update blog
Route::get('admin/editblog/{id}',[AdminController::class,'editblog'])->name('blog.edit');
Route::post('admin/updateblog/{id}',[AdminController::class,'updateblog'])->name('blog.update');
// delete team 
Route::get('admin/blogdelete/{id}',[AdminController::class,'blogdelete']);

// route for contact Details
// // add Add Contact 
Route::get('admin/contact',[AdminController::class,'contactDetails'])->name('contact');
Route::post('admin/contact/add',[AdminController::class,'addcontact'])->name('contact.add');
// // update contact details
Route::post('admin/contact/update',[AdminController::class,'updatecontact'])->name('contact.update');


// route for portfolio 

Route::get('admin/portfolio',[AdminController::class,'portfolio'])->name('portfolio');
Route::post('admin/portfolio/add',[AdminController::class,'addPortfolio'])->name('portfolio.add');
Route::post('admin/portfolio/update',[AdminController::class,'updatePortfolio'])->name('portfolio.update');

// route for happy claint section

// get claint
Route::get('admin/claint',[AdminController::class,'get_claint'])->name('Claint');
// // add claint 
Route::get('admin/new-claint',[AdminController::class,'claint_add'])->name('Claint.add');
Route::post('admin/claint-store',[AdminController::class,'claint_store'])->name('claint.store');
// // update claint
Route::get('admin/claint-edit/{id}',[AdminController::class,'claint_edit'])->name('claint.edit');
Route::post('admin/claint-update',[AdminController::class,'claint_update'])->name('claint.update');
// // delete claint 
Route::get('admin/claint-delete/{id}',[AdminController::class,'claint_delete']);


// route for pricing section

// get claint
Route::get('admin/pricing',[AdminController::class,'get_pricing'])->name('pricing');
// // add pricing 
Route::get('admin/new-pricing',[AdminController::class,'pricing_add'])->name('pricing.add');
Route::post('admin/pricing-store',[AdminController::class,'pricing_store'])->name('pricing.store');
// // update pricing
Route::get('admin/pricing-edit/{id}',[AdminController::class,'pricing_edit'])->name('pricing.edit');
Route::post('admin/pricing-update',[AdminController::class,'pricing_update'])->name('pricing.update');
// // delete pricing 
Route::get('admin/pricing-delete/{id}',[AdminController::class,'pricing_delete']);

// route for carasoul 
// get claint
Route::get('admin/carousel',[AdminController::class,'get_carousel'])->name('carousel');
// // add carousel 
Route::get('admin/new-carousel',[AdminController::class,'carousel_add'])->name('carousel.add');
Route::post('admin/carousel-store',[AdminController::class,'carousel_store'])->name('carousel.store');
// // update carousel
Route::get('admin/carousel-edit/{id}',[AdminController::class,'carousel_edit'])->name('carousel.edit');
Route::post('admin/carousel-update',[AdminController::class,'carousel_update'])->name('carousel.update');
// // delete carousel 
Route::get('admin/carousel-delete/{id}',[AdminController::class,'carousel_delete']);