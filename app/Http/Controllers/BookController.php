<?php

namespace Biblios\Http\Controllers;

use Illuminate\Http\Request;

use Biblios\Http\Requests;
use Biblios\Http\Controllers\Controller;
use Biblios\Book;
use Biblios\Author;
use View;
use Redirect;
use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookList = Book::orderBy('title', 'asc')->with('author')->get();
        return View::make('book/index')->with('bookList', $bookList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = new Book();
        $authorList = Author::orderBy('lastname', 'asc')->orderBy('firstname', 'asc')->lists('lastname', 'id');
        return View::make('book/form')->with('book', $book)->with('authorList', $authorList);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Book::$rules);
        Book::create($request->all());
        return Redirect::to(route('book.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $authorList = Author::orderBy('lastname', 'asc')->orderBy('firstname', 'asc')->lists('lastname', 'id');
        return View::make('book/form')->with('book', $book)->with('authorList', $authorList);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Book::$rules);
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return Redirect::to(route('book.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);
        return Redirect::to(route('book.index'));
    }
}
