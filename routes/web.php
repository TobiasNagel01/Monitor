<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('dashboard.index'));
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(DashboardController::class)->prefix('dashboard')->as('dashboard.')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::controller(MonitorController::class)->prefix('monitors')->as('monitors.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{monitor}', 'edit')->name('edit');
        Route::post('/update/{monitor}', 'update')->name('update');
        Route::get('/delete/{monitor}', 'delete')->name('delete');

        Route::get('/show/{monitor}', 'show')->name('show');
        Route::get('/runNow/{monitor}', 'runNow')->name('runNow');
    });

    Route::controller(UserController::class)->prefix('users')->as('users.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{user}', 'edit')->name('edit');
        Route::post('/update/{user}', 'update')->name('update');
        Route::get('/delete/{user}', 'delete')->name('delete');
    });

    Route::controller(TenantController::class)->prefix('tenants')->as('tenants.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{tenant}', 'edit')->name('edit');
        Route::post('/update/{tenant}', 'update')->name('update');
        Route::get('/delete/{tenant}', 'delete')->name('delete');
    });
});

require __DIR__.'/profile.php';
require __DIR__.'/auth.php';
