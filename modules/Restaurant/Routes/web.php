<?php

Route::prefix('restaurant')->middleware(['auth', 'locked.tenant'])->group(function () {
    // POS Routes
    Route::get('pos', 'RestaurantPosController@index');
    Route::post('pos/checkout', 'RestaurantPosController@checkout');

    // Menu Management
    Route::resource('menu', 'MenuController');

    // Table Management
    Route::get('tables', 'TableController@index');
    Route::post('tables/update', 'TableController@update');
});

Route::get('pos/search-barcode', 'RestaurantPosController@searchBarcode');


Route::post('pos/send-invoice-whatsapp', 'RestaurantPosController@sendInvoiceViaWhatsApp');
