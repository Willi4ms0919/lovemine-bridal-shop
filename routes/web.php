<?php

use Illuminate\Support\Facades\Route;

// Public Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RentalController;

// Admin Controllers
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\OrderAdminController;
use App\Http\Controllers\Admin\UserAdminController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product Details
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

// Checkout
Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');

// Rental Booking
Route::get('/rental-booking', [RentalController::class, 'index'])->name('rental.booking');
Route::post('/rental/confirm', [RentalController::class, 'confirm'])->name('rental.confirm');

// Static Pages
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/about', 'about')->name('about');


/*
|--------------------------------------------------------------------------
| Admin Login (Guest only)
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
});


/*
|--------------------------------------------------------------------------
| Admin Routes (Protected)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {

    // Logout
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Products CRUD
    Route::resource('products', ProductAdminController::class);

    // Orders CRUD
    Route::resource('orders', OrderAdminController::class);

    // Users CRUD
    Route::resource('users', UserAdminController::class);
});


/*
|--------------------------------------------------------------------------
| Fallback 404
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return view('errors.404');
});
