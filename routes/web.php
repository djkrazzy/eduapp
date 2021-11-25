<?php

use App\Http\Controllers\PagesController;


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

Route::get('/', 'PagesController@dashboard');
Route::resource('estudiantes', StudentController::class);
Route::resource('cursos', CursosController::class);
Route::resource('secciones', SectionsController::class);
Route::resource('users', UsersController::class)->names('admin');
Route::post('contact-form', 'UsersController@store')->name('contact-form');;
Route::get('/backend',[PagesController::class, 'index'] )->name('backend.index');
Route::get('/admin/teachers',[PagesController::class, 'teachers'] )->name('admin.teachers');
Route::get('/admin/admisiones',[PagesController::class, 'student'] )->name('admin.estudent');
Route::get('/admin/cursos',[PagesController::class, 'cursos'] )->name('admin.cursos');

// Demo routes

Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/jquerymask', 'PagesController@jQueryMask');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');