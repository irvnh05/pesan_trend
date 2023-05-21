<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use Modules\Program\Models\Program;
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

Route::middleware('auth:api')->get('/programs', function (Request $request) {
    return $request->user();
});
Route::get('/programs', function (Request $request) {
    $programs = Program::with('category')->select('id', 'name', 'slug', 'created_at', 'updated_at', 'notes', 'programcategory_id', 'color')->get();
    return response()->json($programs);
});
