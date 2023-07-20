<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'books' => BookController::class,
]);

// Route::get('/books', [BookController::class, 'index']);
// Route::get('/books/create', [BookController::class, 'create']);
// Route::post('/books', [BookController::class, 'store']);
// Route::get('/books/{book}', [BookController::class, 'show']);
// Route::get('/books/{book}/edit', [BookController::class, 'edit']);
// Route::put('/books/{book}', [BookController::class, 'update']);
// Route::delete('/books/{book}', [BookController::class, 'destroy']);