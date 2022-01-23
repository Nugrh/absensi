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
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

// rute manage user dan lesson
Route::group(['prefix' => 'manage'], function(){

//    user
    Route::get('/user','Manage\UserController@index')->name('manage.user');
    Route::get('/add/form/invite','Manage\UserController@create')->name('manage.add.form.invite');

//    lesson
    Route::get('/lesson','Manage\LessonController@index')->name('manage.lessons');
    Route::get('/add/form/lesson','Manage\LessonController@create')->name('manage.add.form.lesson');

    //    kelas
    Route::get('/kelas','Manage\ClassController@index')->name('manage.kelas');
    Route::get('/add/form/kelas','Manage\ClassController@create')->name('manage.add.form.kelas');
});

// Route group store data
Route::group(['prefix' => 'store'], function(){
    route::post('lessons','Manage\LessonController@store')->name('store.lesson');
    route::post('kelas','Manage\ClassController@store')->name('store.class');
});

// Route group edit data
Route::prefix('edit')->group(function (){
    route::get('lesson/{lesson}','Manage\LessonController@edit')->name('edit.lesson');
    route::get('kelas/{id}','Manage\ClassController@edit')->name('edit.class');
});

Route::group(['prefix' => 'update'], function () {
    route::patch('lesson/{lesson}', 'Manage\LessonController@update')->name('update.lesson');
    route::patch('kelas/{id}', 'Manage\ClassController@update')->name('update.class');
});

Route::group(['prefix' => 'destroy'], function () {
    route::delete('lesson/{lesson}', 'Manage\LessonController@destroy')->name('destroy.lesson');
    route::delete('klass/{id}', 'Manage\ClassController@destroy')->name('destroy.class');
});
