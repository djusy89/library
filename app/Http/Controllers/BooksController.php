<?php

namespace App\Http\Controllers;

use App\Book;
use App\Genre;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $genres = Genre::all();
        $book = new Book();

        return view('book.index', compact('books', 'genres', 'book'));
    }

    public function store()
    {
        Book::create($this->validatedData());

        return redirect()->back();
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $book->update($this->validatedData());

        return redirect('/books');

    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect('/books');
    }

    protected function validatedData()
    {
        return request()->validate([
            'title' => 'required|min:5',
            'author' => 'required',
            'genre_id' => 'required',
            'date_written' => 'required',
            'publisher' => 'required',
            'info' => 'required|min:5|max:250'
        ]);
    }
}
