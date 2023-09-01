<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/pendataan', function () {
//     return view('pendataan');
// })->name('pendataan');

// Route::get('/', [TestController::class, 'home'])->name('home');
// Route::get('/pendataan', [TestController::class, 'data'])->name('pendataan');
// Route::get('/data/{nama}', [TestController::class, 'datanama'])->name('data-nama');
// Route::get('/daftar', [TestController::class, 'daftar'])->name('daftar');
// Route::post('/kirim', [TestController::class, 'kirim'])->name('kirim');

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
