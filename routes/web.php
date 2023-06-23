<?php

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



Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLogin'])->name('login');
Route::get('/email', [App\Http\Controllers\Admin\DashboardController::class, 'emailTemplate']);


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLogin'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login.attempt');

    Route::group(['middleware' => 'auth'], function () { 
         
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('logout');
 
        // Bang
        Route::get('/bangs', [App\Http\Controllers\Admin\BangController::class, 'index'])->name('bangs');
        Route::get('/bangs/sendemail/{id}', [App\Http\Controllers\Admin\BangController::class, 'sendEmail'])->name('bang.sendemail'); 

        Route::get('/bangs/sendsms/{id}', [App\Http\Controllers\Admin\BangController::class, 'sendMessage'])->name('bang.sendsms'); 
         
    });

});


Route::get('/chatboot', function () {
    return view('frontend.pages.home.chatboot');
});