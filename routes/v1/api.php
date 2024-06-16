<?php

use App\Http\Controllers\Api\CategoryController;
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

/** All Routes / Api Here Must Be Authenticated*/

Route::group(['middleware' => 'api' , 'namespace' => 'Api'] , function () {
    Route::get('get-main-categories' , [CategoryController::class , 'index']);
    
});
