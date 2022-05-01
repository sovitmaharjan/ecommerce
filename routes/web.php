<?php

use App\Http\Controllers\Admin\AccountRequestController;
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
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', function() {
    return view('about-us');
})->name('about-us');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/product-detail/{slug}', [ShopController::class, 'productDetail'])->name('product-detail');

Route::get('/artisan-call', function () {
    Artisan::call('migrate');
});

Auth::routes();

Route::post('/account-request', [AccountRequestController::class, 'store'])->name('account-request.store');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => '/admin',
    'middleware' => 'auth'
], function() {
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::get('customer', [UserController::class, 'customer'])->name('customer.index');
    Route::get('login-with/{id}', [UserController::class, 'loginWithId'])->name('user.loginWithId');

    Route::get('/under-construction', function() {
        return view('admin.under-construction');
    })->name('under-construction');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('banner', BannerController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('attribute', AttributeController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product', ProductController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('order', OrderController::class);
    Route::get('/account-request', [AccountRequestController::class, 'index'])->name('account-request.index');
    Route::get('/account-request/{id}/create-account', [AccountRequestController::class, 'edit'])->name('account-request.edit');
    Route::delete('/account-request/{id}', [AccountRequestController::class, 'destroy'])->name('account-request.destroy');
    
    Route::get('/general-setting', [GeneralSettingController::class, 'index'])->name('general-setting.index');
    Route::post('/general-setting', [GeneralSettingController::class, 'store'])->name('general-setting.store');
    Route::patch('/general-setting/{id}', [GeneralSettingController::class, 'update'])->name('general-setting.update');
    
    Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile.index');
    Route::get('/user-profile/edit', [UserProfileController::class, 'edit'])->name('user-profile.edit');
    Route::post('/user-profile', [UserProfileController::class, 'store'])->name('user-profile.store');
    Route::patch('/user-profile/{id}', [UserProfileController::class, 'update'])->name('user-profile.update');
    
});