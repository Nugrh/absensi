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

// rute manage user dan lesson
Route::group(['prefix' => 'manage'], function(){
//    user
    Route::get('/user','Manage\UserController@index')->name('manage.user');
    Route::get('/add/form/invite','Manage\UserController@create')->name('manage.add.form.invite');

//    lesson
    Route::get('/lessons','Manage\LessonController@index')->name('manage.lessons');
    Route::get('/add/form/lesson','Manage\LessonController@create')->name('manage.add.form.lesson');

    //    kelas
    Route::get('/kelas','Manage\ClassController@index')->name('manage.kelas');
    Route::get('/add/form/kelas','Manage\ClassController@create')->name('manage.add.form.kelas');

});
