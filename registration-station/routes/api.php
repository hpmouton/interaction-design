<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controller imports
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TeamController;

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

Route::resource('user', RegistrationController::class);

Route::resource('team', TeamController::class);
