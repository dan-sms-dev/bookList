<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {
    $books = Book::all();
    return view('home', [
        'books' => $books,
    ]);
})->name('home');

Route::get('/livros', function() {
    $books = Book::all();
    return view('books.index', [
        'books' =>  $books,
    ]);
})->name('books.index');

Route::get('/livros/{id}', function($id) {
    $book = Book::findOrFail($id);

    return view('books.show', [
        'book' => $book,
    ]);
})->name('books.show');
