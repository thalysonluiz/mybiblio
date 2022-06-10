<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SubcategoryController;
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
  return view('welcome');
});

Route::middleware(['auth'])->group(function () {
  Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('subcategories', SubcategoryController::class);
    Route::resource('books', BookController::class);

    Route::get('/subcategories/{id}/ajax', [SubcategoryController::class, 'getSubcategoriesByCategory'])->name('subcategories.ajax');
    Route::get('/books/{isbn}/ajax', [BookController::class, 'getIsbnAjax'])->name('books.ajax');
  });
});



require __DIR__ . '/auth.php';