<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\HomeController;

/*
|--------------------------------------------------------------------------
| PORTFOLIO
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'index'])
    ->name('portfolio.index');


/*
|--------------------------------------------------------------------------
| ADMIN AUTHENTICATION
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->name('admin.logout');


    /*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('admin.dashboard');

// Admin Profile
Route::get('/admin/profile', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('admin.profile');

Route::get('/admin/profile/edit', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('admin.profile.edit');

Route::put('/admin/profile', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('admin.profile.update');

    Route::get('/admin/home', [HomeController::class, 'index'])
    ->name('admin.home');

Route::get('/admin/home/edit', [HomeController::class, 'edit'])
    ->name('admin.home.edit');

Route::put('/admin/home', [HomeController::class, 'update'])
    ->name('admin.home.update');