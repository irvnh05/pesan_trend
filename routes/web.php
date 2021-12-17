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

// admim
Route::prefix('admin')
    ->namespace('Admin')
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
    ->middleware(['auth','user'])
    ->group(function (){
        Route::get('/','DashboardController@index')
            ->name('dashboard');

    });

// landing
Route::get('/verification', 'VerificationController@index')
    ->name('verification');
Route::get('/', 'LandingController@index')
    ->name('landing');
Route::get('/cooming-soon', 'LandingController@soon')
    ->name('cooming-soon');    
Route::get('/detail/{slug}', 'DetailController@index')
    ->name('detail');
    
// google auth
Route::get('login/google', 'Auth\GoogleController@googleRedirect');
Route::get('login/google/callback', 'Auth\GoogleController@loginWithGoogle');

//  location 
Route::get('/provinces', 'LocationController@provinces')
    ->name('provinces');
Route::post('regencies', 'LocationController@regencies')
    ->name('regencies');
Route::post('districts', 'LocationController@districts')
    ->name('districts');

//  transaksi
Route::post('/checkout/detail/process/{id}', 'CheckoutController@store')
    ->name('checkout-store');
Route::post('/checkout/detail/{slug}', 'CheckoutController@create')
    ->name('checkout-create');
Route::get('/checkout/confirm', 'CheckoutController@success')
    ->name('checkout-success');
Route::get('/checkout/{slug}', 'CheckoutController@index')
    ->name('checkout');

// verif
Auth::routes(['verify' => true]);
