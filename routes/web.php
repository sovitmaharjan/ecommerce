<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/artisan-call', function () {
    Artisan::call('migrate');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => '/admin',
    'middleware' => 'auth'
], function() {
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);

    Route::get('/under-construction', function() {
        return view('admin.under-construction');
    })->name('admin.under-construction');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('banner', BannerController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product', ProductController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('order', OrderController::class);
    
    Route::get('/general-setting', [GeneralSettingController::class, 'index'])->name('general-setting.index');
    Route::post('/general-setting', [GeneralSettingController::class, 'store'])->name('general-setting.store');
    Route::patch('/general-setting/{id}', [GeneralSettingController::class, 'update'])->name('general-setting.update');
    // Route::post('/status/{id}', [HomeController::class, 'updateStatus'])->name('status.update');
});