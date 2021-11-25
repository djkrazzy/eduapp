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
Route::get('/curso/{id}/sections', 'SectionsController@lasSecciones')->name('buscarSection');
Route::get('/email/{email}/comprobar', 'StudentController@buscarEmail')->name('buscarEmail');
Route::get('/user/{username}/comprobar', 'StudentController@buscarUsername')->name('buscarUsername');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
