<?php

use App\Http\Controllers\AuthController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::group(['namespace' => 'Api'], function () {

        Route::apiResources([
            'users'   => 'UserController',
        ]);
    });
    Route::get('profile', [AuthController::class, 'profile']);
});

Route::group(['namespace' => 'Api'], function () {

    Route::apiResources([
        'books'   => 'BookController',
    ]);
});

Route::group(['namespace' => 'Api'], function () {

    Route::apiResources([
        'categories'   => 'CategoryController',
    ]);
});


///Authentication Routes
Route::post("/register", [AuthController::class, 'register']);
Route::post("/login", [AuthController::class, 'login']);
