<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WorkersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[FrontController::class,'index'])->name('index');
Route::get('/service',[FrontController::class,'service'])->name('service');
Route::get('/galereya',[FrontController::class,'galereya'])->name('galereya');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/blog',[FrontController::class,'blog'])->name('blog');
Route::get('/showblog/{id}',[FrontController::class,'showblog'])->name('showblog');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
Route::post('add_contact',[ContactController::class,'store'])->name('store');
Route::post('payment',[FrontController::class,'payment'])->name('payment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('photos', PhotoController::class)->except(['destroy']);
    Route::get('add_photos', [PhotoController::class, 'create'])->name('add_photos');
    Route::get('show_photos', [PhotoController::class, 'index'])->name('show_photos');
    Route::post('store_photos', [PhotoController::class, 'store'])->name('store_photos');
    Route::get('contact',[ContactController::class,'index'])->name('contact_index');
    Route::delete('deletcontact/{id}',[ContactController::class,'delete'])->name('deletcontact');
    Route::get('edit_photos/{id}',[PhotoController::class,'edit'])->name('edit_photo');
    Route::put('update_photos/{id}',[PhotoController::class,'update'])->name('update_photos');
    Route::get('showphoto/{id}',[PhotoController::class,'show'])->name('showphoto');
    Route::delete('deletphoto/{id}',[PhotoController::class,'destroy'])->name('deletphoto');
    Route::delete('deletpayment/{id}',[PaymentController::class,'delete'])->name('deletpayment');
    Route::get('payments',[PaymentController::class,'index'])->name('payments');

    Route::get('workers',[WorkersController::class,'index'])->name('workers');
    Route::post('store_workers',[WorkersController::class,'store'])->name('store_workers');
    Route::put('update_workers/{id}',[WorkersController::class,'update'])->name('update_workers');
    Route::get('exit_workers/{id}',[WorkersController::class,'exit'])->name('exit_workers');
    Route::delete('delete_workers/{id}',[WorkersController::class,'delete'])->name('delete_workers');
    Route::get('add_workers',[WorkersController::class,'create'])->name('add_workers');
});