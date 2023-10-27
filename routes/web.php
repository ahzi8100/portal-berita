<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/about', [DashboardController::class, 'about'])->name('about');

// Create Data Category
Route::get('/categories/categories', [CategoriesController::class, 'create'])->name('category.create');
Route::post('/categories', [CategoriesController::class, 'store'])->name('category.store');

// Read Data Category
Route::get('/categories', [CategoriesController::class, 'index'])->name('category.index');

// Update Data Categor
Route::get('/categories/{id}/edit', [CategoriesController::class, 'edit'])->name('category.edit');
Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('category.update');

// Delete Data Category
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');

//CRUD News
Route::resource('news', NewsController::class);
