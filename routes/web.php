<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', [AuthController::class, 'login'])->name('home');

Route::group(['prefix' => 'auth', 'guard' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register/{uuid}', [AuthController::class, 'register'])->name('register');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('home', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('brands', [AdminController::class, 'brands'])->name('admin.brands');
        Route::get('brand/new', [AdminController::class, 'createNewBrand'])->name('admin.create-brand');
        Route::get('brand/{uuid}', [AdminController::class, 'viewBrandDetails'])->name('admin.view-brand-details');
    });

    Route::group(['prefix' => 'brand-manager'], function () {
        Route::get('home', [BrandController::class, 'index'])->name('brand.dashboard');
    });

    Route::group(['prefix' => 'customer'], function () {
        Route::get('home', [CustomerController::class, 'index'])->name('customer.dashboard');
    });

    Route::group(['prefix' => 'vendor'], function () {
        Route::get('home', [VendorController::class, 'index'])->name('vendor.dashboard');
    });
});
