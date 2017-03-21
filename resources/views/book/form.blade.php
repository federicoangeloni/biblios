@extends('layouts.biblios')

@section('title')
	Gestione libri
@endsection

@section('content')

	{!! Form::model($book, [
		'route' => isset($book->id) ? ['book.update', $book->id] : 'book.store', 
		'method' => isset($book->id) ? 'put' : 'post'
		]) !!}

		<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
			@foreach($errors->get('title') as $error)
				<span class="help-block">{{ $error }}</span>
			@endforeach
		</div>

		<div class="form-group {{ $errors->has('author') ? 'has-error' : '' }}">
			{!! Form::label('author_id', 'Author') !!}
			{!! Form::select('author_id', $authorList, null, ['class' => 'form-control'])!!}
			@foreach($errors->get('author_id') as $error)
				<span class="help-block">{{ $error }}</span>
			@endforeach
		</div>

		<div class="form-group">
			{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}

@endsection