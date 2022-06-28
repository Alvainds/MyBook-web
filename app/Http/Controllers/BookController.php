<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        $authors = Author::all();
        $books = Book::latest()->paginate(5);
        return view('dashboard.book.index', compact('books', 'categories', 'publishers', 'authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        $authors = Author::all();
        return view('dashboard.book.create', compact('authors', 'categories', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $coverName = time() . '.' . $request->cover->extension();

        $request->cover->move(public_path('images'), $coverName);


        $Book = Book::create([
            'title'       => $request->input('title'),
            'author_id'       => $request->input('author'),
            'publisher_id'       => $request->input('publisher'),
            'category_id'       => $request->input('category'),
            'date_of_issue'       => $request->input('date_of_issue'),
            'description'       => $request->input('description'),
            'cover'       =>  $coverName,
        ]);


        $Book->save();

        return redirect()->route('book.index')
            ->with('success', 'Publisher created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        $authors = Author::all();
        return view('dashboard.book.show', compact('book', 'authors', 'categories', 'publishers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        $authors = Author::all();
        return view('dashboard.book.edit', compact('book', 'authors', 'categories', 'publishers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        request()->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->cover) {
            $coverName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $coverName);
            $input['cover'] = "$coverName";
        } else {
            unset($input['cover']);
        }

        $book->update($input);



        return redirect()->route('book.index')
            ->with('success', 'Book created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index')
            ->with('success', 'Book deleted successfully');
    }
}
