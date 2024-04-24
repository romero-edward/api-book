<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    
    public function index()
    {
        // Todos los autores
        $authors = Author::all();
        return $authors;
    }


    public function store(Request $request)
    {
        //
        $author = new Author();
        $author->name = $request->name;

        $author->save();
        return $author;
    }

    
    public function show(string $id)
    {
        //
        $author = Author::find($id);
        return $author;
    }

    
    public function update(Request $request, string $id)
    {
        //
        $author = Author::findOrFail($request->id);
        $author->name = $request->name;
        $author->save();
        return $author;
    }

    
    public function destroy(string $id)
    {
        //
        $author = Author::destroy($id);
        return $author;
    }
}
