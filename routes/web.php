<?php

use App\Http\Controllers\Frontend\BangController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('/', function () {
    return view('frontend.pages.home.home');
});
Route::post('/bang_request/submit', [HomeController::class,'submitBangRequest']);
Route::post('/postal_code/verification', [HomeController::class,'verifyPostalCode']);
Route::get('/bang/activation', [BangController::class,'showActivateBang']);
Route::post('/bang_request/verification', [BangController::class,'verifyBangId']);

