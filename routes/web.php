<?php
use App\Http\Controllers\ContactController;
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

Route::get('/', function(){
    return view(view: 'home');
});

Route::get('/register', 'App\Http\Controllers\DocumentController@create');
Route::post('/register', 'App\Http\Controllers\DocumentController@store')->name('document_register');

Route::get('/documents','App\Http\Controllers\DocumentController@show' );

Route::get('/documents/edit/{id}', 'App\Http\Controllers\DocumentController@edit');
Route::post('/documents/edit/{id}', 'App\Http\Controllers\DocumentController@update')->name(('document_edit'));

Route::get('/documents/destroy/{id}', 'App\Http\Controllers\DocumentController@destroy')->name('document_deleter');
