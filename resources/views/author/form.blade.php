@extends('layouts.biblios')

@section('title')
	Gestione autori
@endsection

@section('content')

	{!! Form::model($author, [
		'route' => isset($author->id) ? ['author.update', $author->id] : 'author.store', 
		'method' => isset($author->id) ? 'put' : 'post'
		]) !!}

		<div class="form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
			{!! Form::label('firstname', 'Firstname') !!}
			{!! Form::text('firstname', null, ['class' => 'form-control']) !!}
			@foreach($errors->get('firstname') as $error)
				<span class="help-block">{{ $error }}</span>
			@endforeach
		</div>

		<div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
			{!! Form::label('lastname', 'Lastname') !!}
			{!! Form::text('lastname', null, ['class' => 'form-control']) !!}
			@foreach($errors->get('lastname') as $error)
				<span class="help-block">{{ $error }}</span>
			@endforeach
		</div>

		<div class="form-group">
			{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}

@endsection