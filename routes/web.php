<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::resource('budgets', App\Http\Controllers\BudgetController::class);
Route::get('subscriptions', App\Http\Controllers\SubscriptionController::class);
Route::get('piggy-banks', App\Http\Controllers\PiggyBankController::class);
Route::resource('accounts', App\Http\Controllers\AccountController::class);
Route::resource('institutions', App\Http\Controllers\InstitutionController::class)->only('index', 'store');

Route::get('/', fn () => Inertia::render('welcome'))->name('home');

Route::middleware(['auth', 'verified'])->group(function (): void {
    Route::get('dashboard', fn () => Inertia::render('dashboard'))->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
