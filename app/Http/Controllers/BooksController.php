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
        $data = request()->validate([
            'title' => 'required|min:5',
            'author' => 'required',
            'genre_id' => 'required',
            'date_written' => 'required',
            'publisher' => 'required',
            'info' => 'required|min:5|max:250'
        ]);

        if ($this->validate($data)) {
            Book::create($data);
            return redirect()->back();
        } else {
            redirect()-back()->withErrors(['error', 'message']);
        }
    }

    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    public function edit(Book $editBook)
    {
        $genres = Genre::all();

        return view('book.edit-book-modal', compact('editBook', 'genres'));
    }
}
