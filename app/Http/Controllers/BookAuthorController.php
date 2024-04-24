<?php

namespace App\Http\Controllers;

use App\Models\BookAuthor;
use Illuminate\Http\Request;

class BookAuthorController extends Controller
{
   
    public function index()
    {
        //
        $booksAuthors = BookAuthor::all();
        return $booksAuthors;
    }

    public function store(Request $request)
    {
        //
        $bookAuthor = new BookAuthor();
        $bookAuthor->book_id = $request->book_id;
        $bookAuthor->author_id = $request->author_id;
        $bookAuthor-> save();
        return $bookAuthor;
    }

   
    public function show(string $id)
    {
        //
        $bookAuthor = BookAuthor::find($id);
        return $bookAuthor;
    }

    
    public function update(Request $request, string $id)
    {
        //
        $bookAuthor = BookAuthor::findOrFail($request->id);
        $bookAuthor->book_id = $request->book_id;
        $bookAuthor->author_id = $request->author_id;
        $bookAuthor-> save();
        return $bookAuthor;
    }

    
    public function destroy(string $id)
    {
        //
        $bookAuthor = BookAuthor::destroy($id);
        return $bookAuthor;
    }
}
