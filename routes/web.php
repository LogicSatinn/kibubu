<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::resource('institutions', App\Http\Controllers\InstitutionController::class)->only('index', 'store');

Route::resource('accounts', App\Http\Controllers\AccountController::class);

Route::resource('budgets', App\Http\Controllers\BudgetController::class);
