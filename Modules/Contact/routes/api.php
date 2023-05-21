<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Contact\Models\Contact;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/contacts', function (Request $request) {
    return $request->user();
});

Route::post('/contacts', function (Request $request) {
    // Validasi data yang diterima dari permintaan
    $validatedData = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'no_handphone' => 'nullable|string',
        'description' => 'nullable|string',
    ]);

    // Buat objek Contact baru dan simpan data yang diterima
    $contact = new Contact();
    $contact->name = $validatedData['name'];
    $contact->email = $validatedData['email'];
    $contact->no_handphone = $validatedData['no_handphone'];
    $contact->description = $validatedData['description'];
    $contact->save();

    // Berikan respons sukses
    return response()->json(['message' => 'Contact created successfully'], 201);
});
