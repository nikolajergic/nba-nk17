<?php

use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;

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

Route::get('/teams',[TeamsController::class,'index']);
Route::get('/teams/{team}',[TeamsController::class,'show']);
Route::get('/players/{player}', 'App\Http\Controllers\PlayersController@show');


