<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware(['web'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');
    // Pages
    Route::get('/orders', [PageController::class, 'orders'])->name('orders');
    Route::get('/messages', [PageController::class, 'messages'])->name('messages');
    Route::get('/calendar', [PageController::class, 'calendar'])->name('calendar');
    Route::get('/menu', [PageController::class, 'menu'])->name('menu');
    Route::get('/inventory', [PageController::class, 'inventory'])->name('inventory');
    Route::get('/purchase-order', [PageController::class, 'purchaseOrder'])->name('purchase-order');
    Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');


    // 404 - Page non trouvée
    Route::fallback([PageController::class, 'notFound']);
});

// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home
// ');
// Route::get('/orders', [PageController::class, 'orders'])->name('orders');
// Route::get('/messages', [PageController::class, 'messages'])->name('messages');
// Route::get('/calendar', [PageController::class, 'calendar'])->name('calendar');
// Route::get('/menu', [PageController::class, 'menu'])->name('menu');
// Route::get('/inventory', [PageController::class, 'inventory'])->name('inventory');
// Route::get('/purchase-order', [PageController::class, 'purchaseOrder'])->name('
// purchase-order');
// Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
// // 404 - Page non trouvée
// Route::fallback([PageController::class, 'notFound']);
// // Route::get('/{any}', [PageController::class, 'notFound'])->where('any', '.*');
