<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PersonController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uploadpage', [PersonController::class, 'uploadpage']);
Route::post('/uploadproduct', [PersonController::class, 'uploadproduct']);
Route::get('/show', [PersonController::class, 'showProduct']);
Route::get('/download/{file}', [PersonController::class, 'download']);
Route::get('/view/{id}', [PersonController::class, 'view']);