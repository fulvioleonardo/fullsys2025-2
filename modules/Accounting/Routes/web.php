
<?php

use Illuminate\Support\Facades\Route;

Route::prefix('accounting')->middleware(['auth'])->group(function () {
    Route::get('puc', 'AccountingController@puc')->name('accounting.puc');
    Route::get('entries', 'AccountingController@entries')->name('accounting.entries');
    Route::post('entries', 'AccountingController@storeEntry')->name('accounting.entries.store');
    Route::get('reports', 'AccountingController@reports')->name('accounting.reports');
});
