<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Inertia\Inertia;


Route::resource('institutions', App\Http\Controllers\InstitutionController::class)->only('index', 'store');

Route::resource('accounts', App\Http\Controllers\AccountController::class);

Route::resource('budgets', App\Http\Controllers\BudgetController::class);

// Route::get('auth/login', App\Http\Controllers\AuthController::class);
// Route::get('/', App\Http\Controllers\LandingPageController::class);


Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
