<?php
    // MyVendor\contactform\src\routes\web.php
    Route::group(['namespace' => 'MT\mtlara\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('test', 'MTController@index');
        Route::post('test', 'MTController@sendMail')->name('test');
    });