<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('Home');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
