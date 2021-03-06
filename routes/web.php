<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateController;

Route::get('/', function () {
    return view('home');
});

Route::resource('/date', DateController::class);
Route::post("search",[DateController::class,'search']);
Route::post("search",[DateController::class,'validate']);
Route::get('/date',[DateController::class,'view']);
