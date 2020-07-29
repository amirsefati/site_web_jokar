<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/{any}', 'HomeController@index')->name('home');
Route::get('/tablo/{any}', 'HomeController@index')->name('home');

Route::get('', 'HomeController@index')->name('home');

Route::prefix('api/pl1/')->group(function(){
    Route::get('Daily_individual_cash_inflow/{date}','tablo\plugins_1@get_data_api');
});

Route::prefix('api/plugin/')->group(function(){
    Route::get('Daily_individual_cash_inflow/{date}','tablo\plugins_1@get_data');
});