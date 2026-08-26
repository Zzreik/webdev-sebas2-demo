<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get("/bmi/{weight}/{height}", [CalculatorController::class, "show"]);