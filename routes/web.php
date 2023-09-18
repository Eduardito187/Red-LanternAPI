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

Route::middleware([MiddlewareVisitor::class])->group(function () {
    Route::get('/', [VisitorControllers::class, 'Index'])->name('Index');
    Route::get('/privacidad', [VisitorControllers::class, 'Privacidad'])->name('Privacidad');
    Route::get('/confidencialidad', [VisitorControllers::class, 'Confidencialidad'])->name('Confidencialidad');
    Route::get('/seguridad', [VisitorControllers::class, 'Seguridad'])->name('Seguridad');
});

Route::middleware([MiddlewareLogin::class])->group(function () {
    Route::get('/home', [CustomerControllers::class, 'Home'])->name('Home');
});

Route::middleware([MiddlewareNoLogin::class])->group(function () {
    Route::get('/login', [LoginControllers::class, 'LoginIndex'])->name('Login');
    Route::post('/validateLogin', [LoginControllers::class, 'Login'])->name('ValidateLogin');
});