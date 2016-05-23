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

Route::get('/', 'HomeController@index');
Route::get('wel','WelcomeController@wel');
Route::get('pesan', 'WelcomeController@pesan');
Route::get('home', 'HomeController@index');
Route::get('data', 'WelcomeController@data');
Route::get('detail', 'WelcomeController@detail');

//Route kue
Route::get('data',['as'=>'data','uses'=>'kuecontroller@data']);
Route::get('detail',['as'=>'detail','uses'=>'kuecontroller@detail']);
Route::get('edit',['as'=>'detail','uses'=>'kuecontroller@edit']);
Route::get('masukkan',['as'=>'masukkan','uses'=>'kuecontroller@masukkan']);
Route::get('theme',['as'=>'theme','uses'=>'kuecontroller@theme']);
Route::get('pesan', 'kuecontroller@pesan');
Route::get('daftarkue', 'kuecontroller@daftarkue');

Route::POST('pesan/masukkan', 'kuecontroller@simpan');
Route::post('masukkan', 'kuecontroller@simpan');
Route::POST('pesan',['as'=>'pesan','uses'=>'kuecontroller@pesan']);
Route::post('data', 'kuecontroller@data');
Route::get('data/detail/{id}' ,'kuecontroller@detail');
Route::get('daftarkue/detail/{id}', 'kuecontroller@detailkue');


//Route Admin
Route::get('adminh', 'akuecontroller@adminh');
Route::get('adminh/laporan', 'akuecontroller@laporan');
Route::get('dataa', 'akuecontroller@dataa');
Route::get('mulai', 'akuecontroller@mulai');
Route::get('inputk', 'akuecontroller@inputk');
Route::get('input', 'akuecontroller@input');
Route::get('daftarkuea', 'akuecontroller@daftarkuea');
Route::get('dataa/edit/{id}', 'akuecontroller@edit');
Route::get('dataa/delete/{id}', 'akuecontroller@deletea');
Route::get('inputj', 'akuecontroller@inputj');
Route::get('admin/lihat/{id}', 'akuecontroller@lihat');
Route::get('adminh/print/{id}', 'akuecontroller@cetak');
Route::post('adminh/update/{id}', 'akuecontroller@update');
Route::post('daftarkuea/update/{id}', 'akuecontroller@updatekue');
Route::POST('ikue', 'akuecontroller@ikue');
Route::POST('jenis_kue', 'akuecontroller@jenis_kue');
Route::POST('input', 'akuecontroller@tambah_admin');
Route::post('updatea', 'akuecontroller@updatea');


Route::post('adminh', 'akuecontroller@adminh');
Route::get('adminh/editk/{id}', 'akuecontroller@editk');
Route::get('adminh/delete/{id}', 'akuecontroller@delete');
Route::get('daftarkuea/editj/{id}', 'akuecontroller@editj');
Route::get('daftarkuea/delete/{id}', 'akuecontroller@deletek');
Route::get('kue/delete/{id}', 'akuecontroller@deletekue');

Route::get('masuk', 'Auth\AuthController@getLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::post('login/ceklogin', 'Auth\AuthController@postLogin');