<h3>Autori più prolifici</h3>

<ul>
	@foreach($prolificAuthorList as $author)
		<li>{{ $author->firstname }} {{ $author->lastname }} ({{ $author->books->count() }} libri)</li>
	@endforeach
</ul>