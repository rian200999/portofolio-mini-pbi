<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PortfolioController::class, 'home']);
Route::get('/projects', [PortfolioController::class, 'projects']);
Route::get('/contact', [PortfolioController::class, 'contact']);
