<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class bookController extends Controller
{
    public function book()
    {
        return view('book', [
            'book' => Book::with(['author', 'category'])->get(),
            'category' => Category::get(),
            'author' => Author::get()
        ]);
    }

    public function bookStore(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'category_id' => $request->category,
            'author_id' => $request->author,
        ]);

        return redirect('/book');
    }

    public function bookEdit($id)
    {
        $book = Book::find($id);
        $category = Category::all();
        $author = Author::all();

        return view('bookEdit', [
            'book' => $book,
            'category' => $category,
            'author' => $author
        ]);
    }

    public function bookUpdate(Request $request, $id)
    {
        $book = Book::find($id);

        $book->update([
            'title' => $request->title,
            'category_id' => $request->category,
            'author_id' => $request->author,
        ]);

        return redirect('/book');
    }

    public function bookDestroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/book');
    }
}
