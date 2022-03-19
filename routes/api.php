<?php

use App\Http\Controllers\Admin\Api\BannerController;
use App\Http\Controllers\Admin\Api\BrandController;
use App\Http\Controllers\Admin\Api\CategoryController;
use App\Http\Controllers\Auth\ApiAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => [
    // 'cors',
    // 'json.response'
]], function () {
    // public routes
    Route::post('/login', [ApiAuthController::class, 'login']);
    Route::post('/register', [ApiAuthController::class, 'register']);
    Route::post('/logout', [ApiAuthController::class, 'logout']);

    Route::group([
        'prefix' => 'admin',
        // 'middleware' => 'auth:api'
    ], function () {
        //
        Route::get('/user', function (Request $request) {
            return $request->user();
        });

        Route::resource('banner', BannerController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('brand', BrandController::class);
        // // Route::resource('attribute', AttributeController::class);
        // Route::resource('product', ProductController::class);
    });
});