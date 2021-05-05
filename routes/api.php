<?php

use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// // // Route::apiResource('/image','PostController');
Route::resource('/products', ProductController::class);
Route::resource('/index', ProductController::class)->only('index');
Route::resource('/del', ProductController::class)->only('destroy');
