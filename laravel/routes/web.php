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
Route::get('/', function(){
    return view('auths.login');
});

Route::get('/register', 'AuthController@register')->name('register');
Route::post('/postregister', 'AuthController@postregister');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/dosen', 'DosensController@index');
    Route::get('/dosen/add', 'DosensController@add');
    Route::post('/dosen/create', 'DosensController@create');
    Route::get('/dosen/{id}/edit', 'DosensController@edit');
    Route::post('/dosen/{id}/update', 'DosensController@update');
    Route::get('/dosen/{id}/delete', 'DosensController@delete');
    Route::get('/dosen/{id}/profile', 'DosensController@profile');

    Route::get('/ruang', 'RuangsController@index');
    Route::get('/ruang/add', 'RuangsController@add');
    Route::post('/ruang/create', 'RuangsController@create');
    Route::get('/ruang/{id}/edit', 'RuangsController@edit');
    Route::post('/ruang/{id}/update', 'RuangsController@update');
    Route::get('/ruang/{id}/delete', 'RuangsController@destroy');

    Route::get('/kurikulum', 'KurikulumsController@index');
    Route::get('/kurikulum/add', 'KurikulumsController@add');
    Route::post('/kurikulum/create', 'KurikulumsController@create');
    Route::get('/kurikulum/{id}/edit', 'KurikulumsController@edit');
    Route::post('/kurikulum/{id}/update', 'KurikulumsController@update');
    Route::get('/kurikulum/{id}/delete', 'KurikulumsController@destroy');

    Route::get('/jurusan', 'JurusansController@index');
    Route::get('/jurusan/add', 'JurusansController@add');
    Route::post('/jurusan/create', 'JurusansController@create');
    Route::get('/jurusan/{id}/edit', 'JurusansController@edit');
    Route::post('/jurusan/{id}/update', 'JurusansController@update');
    Route::get('/jurusan/{id}/delete', 'JurusansController@delete');

    Route::get('/matkul', 'MatkulsController@index');
    Route::get('/matkul/add', 'MatkulsController@add');
    Route::post('/matkul/create', 'MatkulsController@create');
    Route::get('/matkul/{id}/edit', 'MatkulsController@edit');
    Route::post('/matkul/{id}/update', 'MatkulsController@update');
    Route::get('/matkul/{id}/delete', 'MatkulsController@delete');

    Route::get('/surat', 'SuratsController@index');
    Route::get('/surat/add', 'SuratsController@add');
    Route::post('/surat/create', 'SuratsController@create');
    Route::get('/surat/{id}/print', 'SuratsController@print');
    Route::post('/surat/{id}/update', 'SuratsController@update');
    Route::get('/surat/{id}/delete', 'SuratsController@delete');

    Route::get('/tugas', 'TugasSuratsController@index');
    Route::get('/tugas/add', 'TugasSuratsController@add');
    Route::post('/tugas/create', 'TugasSuratsController@create');
    Route::get('/tugas/{id}/print', 'TugasSuratsController@print');
    Route::post('/tugas/{id}/update', 'TugasSuratsController@update');
    Route::get('/tugas/{id}/delete', 'TugasSuratsController@delete');

    Route::get('/kkn', 'KknSuratsController@index');
    Route::get('/kkn/add', 'KknSuratsController@add');
    Route::post('/kkn/create', 'KknSuratsController@create');
    Route::get('/kkn/{id}/print', 'KknSuratsController@print');
    Route::post('/kkn/{id}/update', 'KknSuratsController@update');
    Route::get('/kkn/{id}/delete', 'KknSuratsController@delete');

    Route::get('/pindah', 'PindahSuratsController@index');
    Route::get('/pindah/add', 'PindahSuratsController@add');
    Route::post('/pindah/create', 'PindahSuratsController@create');
    Route::get('/pindah/{id}/print', 'PindahSuratsController@print');
    Route::post('/pindah/{id}/update', 'PindahSuratsController@update');
    Route::get('/pindah/{id}/delete', 'PindahSuratsController@delete');

    Route::get('/pengantar', 'PengantarSuratsController@index');
    Route::get('/pengantar/add', 'PengantarSuratsController@add');
    Route::post('/pengantar/create', 'PengantarSuratsController@create');
    Route::get('/pengantar/{id}/print', 'PengantarSuratsController@print');
    Route::post('/pengantar/{id}/update', 'PengantarSuratsController@update');
    Route::get('/pengantar/{id}/delete', 'PengantarSuratsController@delete');

    
});


