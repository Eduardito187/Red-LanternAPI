<?php

use App\Http\Controllers\Customer\CustomerControllers;
use App\Http\Controllers\Login\LoginControllers;
use App\Http\Controllers\Visitor\VisitorControllers;
use App\Http\Middleware\MiddlewareVisitor;
use App\Http\Middleware\MiddlewareLogin;
use App\Http\Middleware\MiddlewareNoLogin;
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

    Route::get('/Privacidad', [VisitorControllers::class, 'Privacidad']);
    Route::get('/Confidencialidad', [VisitorControllers::class, 'Confidencialidad']);
    Route::get('/Seguridad', [VisitorControllers::class, 'Seguridad']);

Route::middleware([MiddlewareVisitor::class])->group(function () {
    Route::get('/', [VisitorControllers::class, 'Index'])->name('Index');
});

Route::middleware([MiddlewareLogin::class])->group(function () {
    Route::get('/Home', [CustomerControllers::class, 'Home'])->name('Home');
});

Route::middleware([MiddlewareNoLogin::class])->group(function () {
    Route::get('/{login}', [LoginControllers::class, 'LoginIndex'])->where('login', 'Login|login')->name('login');
    Route::post('/ValidateLogin', [LoginControllers::class, 'Login'])->name('ValidateLogin');
});