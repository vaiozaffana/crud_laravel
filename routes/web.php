<?php

use App\Http\Controllers\authorController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\categoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthorController::class, 'index'])->name('index');
Route::post('/', [AuthorController::class, 'store']);
Route::get('/edit/{id}', [AuthorController::class, 'edit']);
Route::put('/edit/{id}', [AuthorController::class, 'update']);
Route::delete('/delete/{id}', [AuthorController::class, 'destroy']);

Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::post('/category', [CategoryController::class, 'categoryStore']);
Route::get('/categoryEdit/{id}', [CategoryController::class, 'categoryEdit']);
Route::put('/categoryEdit/{id}', [CategoryController::class, 'categoryUpdate']);
Route::delete('/categoryDelete/{id}', [CategoryController::class, 'categoryDestroy']);

Route::get('/book', [BookController::class, 'book'])->name('book');
Route::post('/book', [BookController::class, 'bookStore']);
Route::get('/bookEdit/{id}', [BookController::class, 'bookEdit']);
Route::put('/bookEdit/{id}', [BookController::class, 'bookUpdate']);
Route::delete('/bookDelete/{id}', [BookController::class, 'bookDestroy']);