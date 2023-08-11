<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('profile-details', [PassportAuthController::class, 'userInform']);
    Route::post('logout', [PassportAuthController::class, 'logout']);
});

Route::get('/', [PassportAuthController::class,'index']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});

Route::resource('post', PostController::class)->except(['edit', 'create']);
Route::resource('about', AboutController::class)->except(['edit', 'create']);
Route::resource('contact', ContactController::class)->except(['edit', 'create']);
Route::resource('description', DescriptionController::class)->except(['edit', 'create']);
