
<?php

use Illuminate\Support\Facades\Route;

Route::prefix('pharmacy')->middleware(['auth'])->group(function () {
    Route::get('medications', 'PharmacyController@medications')->name('pharmacy.medications');
    Route::get('prescriptions', 'PharmacyController@prescriptions')->name('pharmacy.prescriptions');
});
