<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Transaction\Models\Transaction;

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

Route::middleware('auth:api')->get('/transactions', function (Request $request) {
    return $request->user();
});

Route::post('/checkout', 'Modules\Transaction\Http\Controllers\Frontend\TransactionsController@checkout')->name('checkout');
Route::post('/confirm_payment', function (Request $request) {
    // Validasi data yang diterima dari permintaan
    $validatedData = $request->validate([
        'no_transaksi' => 'required|string',
    ]);

    // Cari data berdasarkan nomor transaksi
    $transaction = Transaction::findOrFail($validatedData['no_transaksi'])->first();

    if ($transaction) {
        // Data ditemukan, kirimkan respons dengan data transaksi
        return response()->json($transaction, 200);
    } else {
        // Data tidak ditemukan, kirimkan respons dengan pesan error
        return response()->json(['message' => 'No transaction found'], 404);
    }
});

