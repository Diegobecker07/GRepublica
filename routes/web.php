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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perfil', function () {
    return view('perfil');
})->name('GRepublica.perfil');

Route::get('/assinatura', function () {
    return view('perfil');
})->name('GRepublica.assinatura');


Route::get('/encerrarconta', function () {
    return view('encerrarconta');
})->name('GRepublica.encerrarconta');

Route::get('/about', function () {
    return view('about');
})->name('GRepublica.about');

Route::get('/faqs', function () {
    return view('faqs');
})->name('GRepublica.faqs');

Route::get('/GPro', function () {
    return view('GPro');
})->name('GRepublica.GPro');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil', 'PerfilController@index')->name('perfil');
Route::get('/assinatura', 'AssinaturaController@index')->name('assinatura');
Route::get('/encerrarconta', 'EncerrarcontaController@index')->name('encerrarconta');

Route::get('/about', 'AboutController@index')->name('about');
Route::get('/faqs', 'FaqsController@index')->name('faqs');
Route::get('/GPro', 'GProController@index')->name('GPro');