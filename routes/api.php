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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/notes', 'NoteController@index');

Route::get('/notes/{id}', 'NoteController@show');

Route::post('/notes', 'NoteController@store');

Route::post('/notes/{id}/description', 'PlayerController@description');

Route::put('notes/{id}/descriptiop', 'PlayerController@descriptione');

Route::delete('/notes/{id}', 'NoteController@delete');

Route::delete('/players/{id}/description', 'PlayerController@description');

