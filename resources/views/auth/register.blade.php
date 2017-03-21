@extends('layouts.biblios')

@section('title', 'Registrati')

@section('content')

	{!! Form::open(['url' => route('register.post')]) !!}
		
	    {!! csrf_field() !!}

	    @if (count($errors) > 0)
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    @endif

	<div class="form-group">
		<label for="name">Nome</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" id="password" placeholder="Password">
	</div>
	<div class="form-group">
		<label for="password_confirmation">Conferma password</label>
		<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
	</div>
	<div class="form-group">
		{!! Captcha::img() !!}
		<input type="text" class="form-control" name="captcha" id="captcha" placeholder="Captcha">
	</div>
	<button type="submit" class="btn btn-default">Registrati</button>	    

	{!! Form::close() !!}
	

@endsection