<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('messages', [MessageController::class, 'index']);
Route::post('messages', [MessageController::class, 'store']);

// Route::get('admin/books', [BookController::class, 'index'])->name('book.index');
// Route::get('admin/books/{id}', [BookController::class, 'show'])->whereNumber('id')->name('book.show');
Route::prefix('admin/books')->name('book.')->controller(BookController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('{id}', 'show')->whereNumber('id')->name('show');
    Route::get('create', 'create')->name('create');
    Route::post('', 'store')->name('store');
});
