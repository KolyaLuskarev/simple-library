<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
        ]);

        Book::create($data);

        return redirect()->route('books.index')->with('success', 'Книга добавлена');
    }
}
