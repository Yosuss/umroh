<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/umroh')->group(function () {
    Route::get('/',[mainController::class,'index']);
});