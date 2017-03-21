<?php

namespace Biblios\Http\Controllers;

use Biblios\Http\Controllers\Controller;
use View;
use Auth;
use Biblios\Book;

class FrontendController extends Controller
{
    
    public function home()
    {
        return View::make('home');
    }

    public function getPrivatePage()
    {
    	return View::make('private');
    }

    public function addFavouriteBook($bookId)
    {
    	Auth::user()->books()->attach(Book::findOrFail($bookId));
    	return redirect(route('private-page'));
    }

}
