<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/{any}', 'HomeController@index')->name('home');
Route::get('/tablo/{any}', 'HomeController@index')->name('home');

Route::get('', 'HomeController@index')->name('home');

Route::prefix('archive/api/')->group(function(){
    Route::get('daily_individual_cash_inflows','tablo\plugins_1@get_data_api');
});

Route::prefix('api/plugin/')->group(function(){
    Route::get('daily_individual_cash_inflows','tablo\plugins_1@get_data');
    Route::get('micro_entry_and_exit','tablo\plugins_1@get_data_2');

});