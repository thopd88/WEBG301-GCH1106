<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors', ['authors' => $authors]);
    }

    public function create()
    {   
        $author = new Author();
        $author->name = "Laravel Author ".rand(1000, 9999);
        $author->email = rand(1000, 9999)."@gmail.com";
        $author->address = "Laravel Address ".rand(1000, 9999);
        $author->save();
        return 'Author created successfully with id ' . $author->id;
    }
}
