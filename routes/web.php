<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


//Users

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\PublishersController;


//Dashboard
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;



use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;


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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('books', BooksController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('authors', AuthorsController::class);
Route::resource('publishers', PublishersController::class);

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('dashboard')->group(function () {
        //admin pages

        Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('Dashboard');
        Route::resource('book', BookController::class);
        Route::resource('author', AuthorController::class);
        Route::resource('publisher', PublisherController::class);

        Route::resource('roles', RoleController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('users', UserController::class);
    });
});
