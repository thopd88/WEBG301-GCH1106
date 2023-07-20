<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('home', ['books' => $books]);
    }

    public function create()
    {   
        $book = new Book();
        $book->title = "Laravel Book ".rand(1000, 9999);
        $book->author = rand(1000, 9999);
        $book->save();
        return 'Book created successfully with id ' . $book->id;
    }
}
