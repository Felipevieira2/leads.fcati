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

Route::get('/', 'LeadController@create');

Route::post('/lead/novo', 'LeadController@store');

Route::get('/lead/agradecimento', function(){
    return view('agradecimento');
});
