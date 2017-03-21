<?php

namespace Biblios\Http\Controllers;

use Illuminate\Http\Request;
use Biblios\Http\Requests;
use Biblios\Http\Controllers\Controller;
use Biblios\Author;
use View;
use Redirect;
use DB;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorList = Author::orderBy('firstname', 'asc')->orderBy('lastname', 'asc')->get();
        return View::make('author/index')->with('authorList', $authorList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author = new Author();
        return View::make('author/form')->with('author', $author);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Author::$rules);
        Author::create($request->all());
        return Redirect::to(route('author.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return View::make('author/form')->with('author', $author);
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
        $this->validate($request, Author::$rules);
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return Redirect::to(route('author.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Author::destroy($id);
        return Redirect::to(route('author.index'));
    }
}
