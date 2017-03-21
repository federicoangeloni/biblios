<?php 

namespace Biblios\Http\ViewComposers;

use Illuminate\View\View;
use Biblios\Author;

class ProlificAuthorViewComposer {

	protected $prolificAuthorList = [];

	public function __construct() {
		$this->prolificAuthorList = Author::with('books')->limit(3)->get()->sortBy(function($author) {
		    return $author->books->count();
		})->reverse();
	}

	public function compose(View $view) {
		$view->with('prolificAuthorList', $this->prolificAuthorList);
	}

}