<h3>Ultimi libri</h3>

<ul>
	@foreach($lastBookList as $book)
		<li>
			{{ $book->title }}
			@if(Auth::check())
				<a href="{{ route('favourite-book', [ 'bookId' => $book->id ]) }}">
					Aggiungi
				</a>
			@endif
		</li>
	@endforeach
</ul>