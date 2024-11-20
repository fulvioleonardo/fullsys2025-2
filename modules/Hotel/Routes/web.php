
<?php

use Illuminate\Support\Facades\Route;

Route::prefix('hotel')->middleware(['auth'])->group(function () {
    Route::get('rooms', 'HotelRoomController@index')->name('hotel.rooms');
    Route::get('reservations', 'HotelReservationController@index')->name('hotel.reservations');
});
