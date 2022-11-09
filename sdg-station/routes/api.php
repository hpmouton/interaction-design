<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controller Imports
use App\Http\Controllers\SDGController;
use App\Http\Controllers\UserController;
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

Route::resource('sdg', SDGController::class);
Route::resource('users',UserController::class);
