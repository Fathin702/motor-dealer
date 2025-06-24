<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;

Route::get('/', [MotorController::class, 'index']);
Route::get('/motor/{id}', [MotorController::class, 'show']);
