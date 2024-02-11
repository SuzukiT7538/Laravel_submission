<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\ConduitController@index');
Route::get('/article/{slug?}-{id?}', 'App\Http\Controllers\ConduitController@article');
Route::get('/article/{slug?}-{id?}/delete', 'App\Http\Controllers\ConduitController@deleteArticle');
Route::post('/article/{slug?}-{id?}/addComment', 'App\Http\Controllers\ConduitController@addComment');
Route::get('/editor', 'App\Http\Controllers\ConduitController@CEArticle');
Route::post('/editor', 'App\Http\Controllers\ConduitController@publishArticle');
Route::get('/editor/{slug?}-{id?}', 'App\Http\Controllers\ConduitController@editArticle');
Route::post('/editor/{slug?}-{id?}', 'App\Http\Controllers\ConduitController@saveArticle');

Route::get('/test', 'App\Http\Controllers\ConduitController@test');
