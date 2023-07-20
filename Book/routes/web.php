<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/books', function () {
    $BookIndex = new BookController();
    return $BookIndex->index();
});

Route::get('/books/create', function () {
    $BookCreate = new BookController();
    return $BookCreate->create();
});

Route::get('/authors', function () {
    $AuthorIndex = new AuthorController();
    return $AuthorIndex->index();
});

Route::get('/authors/create', function () {
    $AuthorCreate = new AuthorController();
    return $AuthorCreate->create();
});
