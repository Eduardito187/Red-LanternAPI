<?php

use App\Http\Controllers\Customer\CustomerControllers;
use App\Http\Controllers\Login\LoginControllers;
use App\Http\Controllers\Visitor\VisitorControllers;
use App\Http\Middleware\MiddlewareVisitor;
use App\Http\Middleware\MiddlewareLogin;
use App\Http\Middleware\MiddlewareNoLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Visitor\CategoryControllers;

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
    Route::get('/category/{url}', [CategoryControllers::class, 'CategoryUrl'])->name('Category');
    Route::get('/quienes-somos', [VisitorControllers::class, 'QuienesSomos'])->name('QuienesSomos');
    Route::get('/blog', [VisitorControllers::class, 'Blog'])->name('Blog');
});

Route::middleware([MiddlewareLogin::class])->group(function () {
    Route::get('/Home', [CustomerControllers::class, 'Home'])->name('Home');
});

Route::middleware([MiddlewareNoLogin::class])->group(function () {
    Route::get('/Login', [LoginControllers::class, 'LoginIndex'])->name('Login');
    Route::post('/ValidateLogin', [LoginControllers::class, 'Login'])->name('ValidateLogin');
});