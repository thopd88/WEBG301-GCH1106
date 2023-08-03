<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index', ['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        return redirect('/tags');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::find($id);
        return view('tags.show', ['tag' => $tag]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::find($id);
        return view('tags.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->save();
        return redirect('/tags');
    }

    // public function delete(string $id)
    // {
    //     $tag = Tag::find($id);
    //     return view('tag.delete', ['tag' => $tag]);
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect('/tags');
    }
}
