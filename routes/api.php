<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => ['json.response']], function () {
    Route::post('/register', 'AuthenticatedSessionController@register');
    Route::post('/login', 'AuthenticatedSessionController@login');
});
Route::group(['middleware' => 'auth:api'], function() {
    Route::post('/logout', 'AuthenticatedSessionController@logout');
});