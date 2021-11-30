<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route group master data
Route::group(['prefix'=>'master-data'], function (){
    Route::get('/siswa', 'SiswaController@index')->name('master-data.siswa');
    Route::get('/kelas', 'KelasController@index')->name('master-data.kelas');
});

// rute login wit' github
Route::get('login/github', 'GithubController@redirectToProvider');
Route::get('login/github/callback', 'GithubController@handleProviderCallback');

// rute manage user dan undang
Route::group(['prefix' => 'manage'], function(){
    Route::get('/user','Manage\UserController@index')->name('manage.user');
    Route::get('/add/form/invite','Manage\UserController@create')->name('manage.add.form.invite');
});
