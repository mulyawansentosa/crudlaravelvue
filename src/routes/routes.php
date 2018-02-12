<?php

Route::group(['prefix' => 'provinsi'], function() {
    Route::get('demo', 'Bantenprov\Provinsi\Http\Controllers\ProvinsiController@demo');
    Route::get('test', 'Bantenprov\Provinsi\Http\Controllers\ProvinsiController@test');
});
