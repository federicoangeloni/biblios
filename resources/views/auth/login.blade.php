@extends('layouts.biblios')

@section('title', 'Login')

@section('content')

	{!! Form::open(['url' => route('login.post')]) !!}
		
	    {!! csrf_field() !!}

	    @if (count($errors) > 0)
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    @endif

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" id="password" placeholder="Password">
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox"> Remember me?
		</label>
	</div>
	<button type="submit" class="btn btn-default">Login</button>	    

	{!! Form::close() !!}
	

@endsection