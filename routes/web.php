<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/search', [SearchController::class, 'get_search_results'])->name('get_search_results');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('app/tinte/dashboard/products/products');
    })->name('dashboard');

    Route::get('dashboard/analytics', function () {
        return Inertia::render('app/dashboard/crm/page');
    })->name('dashboard.analytics');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
