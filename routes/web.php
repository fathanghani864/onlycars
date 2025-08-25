<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MerchandiseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('events', EventController::class);
Route::resource('galleries', GalleryController::class);
Route::resource('merchandises', MerchandiseController::class);




