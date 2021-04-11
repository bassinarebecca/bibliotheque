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
//route sur ajouter_livre
Route::get('ajout','ajoutController@ajout');
Route::post('ajout','ajoutController@postAjout');

// ------
Route::get('login','authController@index');
Route::post('post-login','authController@postLogin');
Route::get('register','authController@register');
Route::post('post-register','authController@postRegister');
Route::get('dashboard','authController@dashboard');
Route::get('logout','authController@logout');


