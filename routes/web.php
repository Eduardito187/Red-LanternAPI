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