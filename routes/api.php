<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployersController;
use App\Http\Controllers\CarsController;

Route::get('employers', [EmployersController::class, 'index']);
Route::get('cars', [CarsController::class, 'index']);
Route::post('cars/create', [CarsController::class, 'save']);