@extends('layouts.biblios')

@section('title')
	Gestione libri
@endsection

@section('content')
	<p>
		<a href="{{ route('book.create') }}">Nuovo</a>
	</p>
	<table class="table">
		@foreach($bookList as $book)
			<tr>
				<td>{{ $book->title }}</td>
				<td>{{ $book->author->lastname }}</td>
				<td>
					<a class="btn btn-default" href="{{ route('book.edit', ['book' => $book->id]) }}">Modifica</a>
				</td>
				<td>
					{!! Form::open(['route' => ['book.destroy', $book->id], 'method' => 'delete' ]) !!}
						{!! Form::submit('Elimina', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
		@endforeach
	</table>
@endsection