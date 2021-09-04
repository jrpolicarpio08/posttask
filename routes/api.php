<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\posttask;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/plus/{x}/{y}',[posttask::class,'Addition']);
Route::get('/minus/{x}/{y}',[posttask::class,'Subtraction']);
Route::get('/multiply/{x}/{y}',[posttask::class,'Multiplication']);
Route::get('/divide/{x}/{y}',[posttask::class,'Division']);

