<?php

use App\Http\Controllers\CompaniesController;

Route::get('/', function () {
    return redirect()->route('empresas.index');
});

Route::resource('empresas', 'CompaniesController');
Route::auth();

Route::get('/home', 'HomeController@index');
