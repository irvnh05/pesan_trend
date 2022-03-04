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

// admin
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function (){
        Route::get('/','DashboardController@index')
            ->name('dashboard');
        // fitur program
        Route::resource('kategori-program', 'KategoriProgramController');
        Route::resource('galeri-program', 'GaleriProgramController');
        Route::resource('program', 'ProgramController');
        // fitur package
        Route::resource('kategori-package', 'KategoriPackageController');
        Route::resource('package', 'PackageController');
         // fitur manage user
        Route::resource('user', 'UserController');
        // fitur artikel
        Route::resource('artikel', 'ArtikelController');
        Route::post('artike-post', 'ArtikelController@upload')
        ->name('upload');    
        Route::post('search', 'ArtikelController@search')
        ->name('search');    
        Route::get('cari','ArtikelController@autoComplete') 
        ->name('cari');
        // transaksi
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

// petugas
Route::prefix('petugas')
    ->namespace('Petugas')
    ->middleware(['auth','petugas'])
    ->group(function (){
        Route::get('/','DashboardController@index')
            ->name('dashboard');
    // fitur artikel
        Route::resource('article', 'ArtikelController');
        Route::post('artikel-post', 'ArtikelController@upload')
        ->name('upload');    
        Route::post('search', 'ArtikelController@search')
        ->name('search');  

    });

// landing
Route::get('/verification', 'VerificationController@index')
    ->name('verification');
Route::get('/', 'LandingController@index')
    ->name('landing');
Route::get('/cooming-soon', 'LandingController@soon')
    ->name('cooming-soon');    
Route::get('/tentang-kami', 'LandingController@about')
    ->name('about');  
Route::get('/detail/{slug}', 'DetailController@index')
    ->name('detail');
Route::get('/artikel', 'LandingController@artikel')
    ->name('artikel');  
Route::get('/artikel-detail/{id}', 'LandingController@artikeldetail')
    ->name('artikel-detail');  
// forest camp
Route::get('/forest-camp', 'LandingController@forestcamp')
    ->name('forestcamp');
Route::get('/family', 'LandingController@family')
    ->name('family');
    
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
// sedekah subuh
Route::put('/checkout/detail/process/{slug}', 'CheckoutController@store')
    ->name('checkout-store');
Route::get('/checkout/{slug}', 'CheckoutController@create')
    ->name('checkout-create');
Route::get('/checkout/confirm', 'CheckoutController@success')
    ->name('checkout-success');
// Route::get('/checkout/{slug}', 'CheckoutController@index')
//     ->name('checkout');
// tahajud camp
 Route::get('/detail', 'CheckoutController@createalternate')
       ->name('checkout-alternate');


// verif
Auth::routes(['verify' => true]);