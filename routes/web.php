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


Route::get('/','\App\Http\Controllers\ExerciseController@index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', '\App\Http\Controllers\ReportController@index')
    ->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])
    ->post('/', '\App\Http\Controllers\ReportController@store')
    ->name('submit');
