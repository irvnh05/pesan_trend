<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Modules\MainEvent\Models\MainEvent;
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

Route::middleware('auth:api')->get('/mainevents', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->get('/mainevents', function (Request $request) {
//     $mainEvents = MainEvent::select('id', 'name', 'start_date', 'end_date', 'start_time', 'end_time', 'program_id')->get();
//     return response()->json($mainEvents);
// });
Route::get('/mainevents', function (Request $request) {
    $mainEvents = MainEvent::select('id', 'name', 'start_date', 'end_date', 'start_time', 'end_time', 'program_id','slug')->get();
    return response()->json($mainEvents);
});
