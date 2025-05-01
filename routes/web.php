<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;


Route::resource('institutions', App\Http\Controllers\InstitutionController::class)->only('index', 'store');

Route::resource('accounts', App\Http\Controllers\AccountController::class);

Route::resource('budgets', App\Http\Controllers\BudgetController::class);

Route::get('auth/login', App\Http\Controllers\AuthController::class);
Route::get('/', App\Http\Controllers\LandingPageController::class);
