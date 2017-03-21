<?php 

namespace Biblios\Http\ViewComposers;

use Illuminate\View\View;
use Biblios\Book;

class LastBookViewComposer {

	protected $lastBookList = [];

	public function __construct() {
		$this->lastBookList = Book::orderBy('created_at', 'desc')->limit(3)->get();
	}

	public function compose(View $view) {
		$view->with('lastBookList', $this->lastBookList);
	}

}