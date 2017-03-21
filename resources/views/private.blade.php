@extends('layouts.biblios')

@section('title', 'Pagina privata')

@section('content')

	<div class="row">
		<div class="col-md-6">

			@include('shared.lastBook')

		</div>
		<div class="col-md-6">

			<h3>I miei libri preferiti</h3>

			<ul>
				@foreach(Auth::user()->books as $book)
					<li>{{ $book->title }} ({{ $book->pivot->created_at }})</li>
				@endforeach
			</ul>

		</div>
	</div>
	

@endsection