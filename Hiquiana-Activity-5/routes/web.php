<?php

use Illuminate\Support\Facades\Route;

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

// Routes for both GIRLS and BOYS versions
Route::get('/girls/{operation}/{value1}/{value2}', 'App\Http\Controllers\GirlsCalculatorController@compute');
Route::get('/boys/{operation1}/{value1}/{value2}/{operation2}/{value3}/{value4}', 'App\Http\Controllers\BoysCalculatorController@compute');
