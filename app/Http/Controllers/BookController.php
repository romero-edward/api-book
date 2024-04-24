<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
  
    public function index()
    {
        $books = Book::all();
        return $books;
    }

    /**
     *crear un nuevo dato 
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->date_pub = $request->date_pub;
        $book-> save();
        return $book;
    }

    
    public function show(string $id)
    {
        // Buscar un registro por su id
        $book = Book::find($id);
        return $book;
    }

    
    public function update(Request $request, string $id)
    {
        // Modificar un registro por id
        $book = Book::findOrFail($request->id);
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->date_pub = $request->date_pub;

        $book-> save();
        return $book;
    }

    
    public function destroy(string $id)
    {
        // Eliminar un registro
        $book = Book::destroy($id);
        return $book;
    }
}
