<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => '/admin',
    'middleware' => 'auth'
], function() {
    
    // logout
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    //dashboard page
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    // update status
    Route::post('/status/{id}', [HomeController::class, 'updateStatus'])->name('status.update');
    // users
    Route::resource('user', UserController::class);
    // banner
    Route::resource('banner', BannerController::class);
    // brand
    Route::resource('brand', BrandController::class);
});