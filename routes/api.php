<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\api\AuthController;
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

Route::group([
    'middleware' => 'admin.api.auth',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/logout',[AuthController::class,'logout']);
    Route::post('/refresh',[AuthController::class,'refresh']);
    Route::post('/me',[AuthController::class,'me']);
    Route::post('/changepassword',[AuthController::class,'changePassWord']);
    Route::delete('/delete',[AuthController::class,'destroy']);
});

Route::group([
    'prefix' => 'auth'

], function ($router) {

    Route::post('/login',[AuthController::class,'login']);
    Route::post('/register',[AuthController::class,'register']);

});
