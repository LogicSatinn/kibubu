<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::resource('institutions', App\Http\Controllers\InstitutionController::class)->only('index', 'store');

Route::resource('category-groups', App\Http\Controllers\CategoryGroupController::class);

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('accounts', App\Http\Controllers\AccountController::class);

Route::resource('loans', App\Http\Controllers\LoanController::class);

Route::resource('credit-cards', App\Http\Controllers\CreditCardController::class);
