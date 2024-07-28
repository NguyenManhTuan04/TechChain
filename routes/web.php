<?php

use \App\Http\Controllers\Admin\ProductController;
use \App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use \App\Http\Controllers\AuthController;

use App\Http\Middleware\CheckRoleAdminMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Admin

// Login
Route::get('/admin/login', [AuthController::class, 'showFormLogin'])->name('admin.showFormLogin');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');
// Register
Route::get('/admin/register', [AuthController::class, 'showFormRegister'])->name('admin.showFormRegister');
Route::post('/admin/register', [AuthController::class, 'register'])->name('admin.register');
// Logout
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
// Forgot password
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Reset password
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


// Client

//login
Route::get('/client/login', function () {
    return view('auth.client.login');
})->name('client.login');
//Route::get('/client/login', [AuthController::class, 'showFormLogin'])->name('admin.showFormLogin');
//Route::post('/client/login', [AuthController::class, 'login'])->name('client.login');


Route::get('/shop', function () {
    return view('client.page.shop');
})->name('shop');

Route::get('/product-detail', function () {
    return view('client.page.product-detail');
})->name('product-detail');

Route::get('/about-us', function () {
    return view('client.page.about-us');
})->name('about-us');

Route::get('/contact', function () {
    return view('client.page.contact');
})->name('contact');



Route::get('/shopping-cart', function () {
    return view('client.page.shopping-cart');
})->name('shopping-cart');

Route::get('/checkout', function () {
    return view('client.page.checkout');
})->name('checkout');

Route::get('/blog-detail', function () {
    return view('client.page.blog-detail');
})->name('blog-detail');

Route::get('/blog-list', function () {
    return view('client.page.blog-list');
})->name('blog-list');


Route::middleware(['auth', 'auth.admin', 'check.session'])
    ->prefix('admins')
    ->as('admins.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('dashboard');
        Route::get('/statistical', function () {
            return view('admin.statistical.index');
        })->name('statistical');

        Route::resource('category', CategoryController::class);
        Route::resource('product', ProductController::class);
    });
Route::middleware(['auth', 'auth.client', 'check.session'])->prefix('clients')->as('clients.')->group(function () {
    Route::get('/client', function () {
        return view('client.index');
    })->name('client');
});

Route::get('/403', function () {
    return response()->view('errors.403', [], 403);
});




