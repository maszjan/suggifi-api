<?php

use App\Http\Controllers\api\GamesController;
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




Route::get('/gamestitlesone',[GamesController::class,'titlesOne']);
Route::get('/gamestitlestwo',[GamesController::class,'titlesTwo']);
Route::get('/gamestitlesthree',[GamesController::class,'titlesThree']);
