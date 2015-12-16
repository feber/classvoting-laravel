<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('/', function () {
    return view('welcome');
});

Route::get('report', 'ReportController@index');

Route::group(['middleware' => 'role:'.App\User::TYPE_DOSEN], function () {
    Route::resource('kelas', 'KelasController');
});

Route::group(['middleware' => 'role:'.App\User::TYPE_ADMIN], function () {
    Route::resource('makul', 'MataKuliahController');
    Route::resource('prodi', 'ProgramStudiController');
    Route::resource('user', 'UserDataController');
});

Route::group(['middleware' => 'role:'.App\User::TYPE_MAHASISWA], function () {
    Route::get('vote', 'VoteController@index');
    Route::get('vote/start', 'VoteController@start');
    Route::post('vote', 'VoteController@store');
});
