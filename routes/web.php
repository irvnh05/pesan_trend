<?php

use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// Route::get('redirect', 'Auth\GoogleController@redirect');
// Route::get('callback', 'Auth\GoogleController@callback');
// Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
// Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProvideCallback');
// Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
// Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
Route::get('login/google', 'Auth\GoogleController@googleRedirect');
Route::get('login/google/callback', 'Auth\GoogleController@loginWithGoogle');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// admi
Route::prefix('admin')
    ->namespace('Admin')
    // ->middleware('role:user');
    ->middleware(['auth','admin'])
    ->group(function (){
        Route::get('/','DashboardController@index')
            ->name('dashboard');

        Route::resource('kategori-program', 'KategoriProgramController');
        Route::resource('galeri-program', 'GaleriProgramController');
        Route::resource('program', 'ProgramController');
        Route::resource('transaction', 'TransactionController');
    });

// user
Route::prefix('user')
    ->namespace('User')
    // ->middleware('role:admin');
    ->middleware(['auth','user'])
    ->group(function (){
        Route::get('/','DashboardController@index')
            ->name('dashboard');

    });
// Route::group(['middleware' => ['auth','user']], function () {

// });

Auth::routes(['verify' => true]);


// route transaksi

// // proses transaksi
// Route::post('/checkout/{id}','CheckoutController@process')
//     ->name('checkout-process')
//     ->middleware(['auth','Verified']); 

// // page informasi 
// Route::get('/checkout/{id}','CheckoutController@index')
//     ->name('checkout')
//     ->middleware(['auth','Verified']);

// // proses menambah jumlah orang
// Route::post('/checkout/create/{detail_id}','CheckoutController@create')
//     ->name('checkout-create')
//     ->middleware(['auth','Verified']);

// // proses mengurangi jumlah orang
// Route::get('/checkout/remove/{detail_id}','CheckoutController@remove')
//     ->name('checkout-remove')
//     ->middleware(['auth','Verified']);

// // proses update status 
// Route::get('/checkout/confirm/{id}','CheckoutController@success')
//     ->name('checkout-success')
//     ->middleware(['auth','Verified']);