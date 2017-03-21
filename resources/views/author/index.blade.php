@extends('layouts.biblios')

@section('title')
	Gestione autori
@endsection

@section('content')
	<p>
		<a href="{{ route('author.create') }}">Create new author</a>
	</p>
	<table class="table">
		@foreach($authorList as $author)
			<tr>
				<td>{{ $author->firstname }} {{ $author->lastname }}</td>
				<td>{{ $author->bookCount }}</td>
				<td>
					<a class="btn btn-default" href="{{ route('author.edit', ['author' => $author->id]) }}">Modifica</a>
				</td>
				<td>
					{!! Form::open(['route' => ['author.destroy', $author->id], 'method' => 'delete' ]) !!}
						{!! Form::submit('Elimina', ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
		@endforeach
	</table>
@endsection