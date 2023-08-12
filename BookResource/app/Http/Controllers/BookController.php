<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('book.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('book.create', ['categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        
        if ($request->hasFile('image')) {
            $book->image = $request->file('image')->store('public/images');
            $book->image = env('APP_URL').str_replace('public/', '/upload/', $book->image);
        }
        
        $book->year = $request->year;
        $book->category_id = $request->category_id;
        $book->save();
        $book->tags()->attach($request->tags);
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('book.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('book.edit', ['book'=>$book, 'categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $book->title = $request->title;
        $book->description = $request->description;
        if ($request->hasFile('image')) {
            $book->image = $request->file('image')->store('public/images');
        }
        $book->year = $request->year;
        $book->tags()->sync($request->tags);
        $book->save();
        return redirect('/books');
    }

    // public function delete(string $id)
    // {
    //     $book = Book::find($id);
    //     return view('book.delete', ['book' => $book]);
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }
}
