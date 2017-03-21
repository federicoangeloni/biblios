@extends('layouts.biblios')

@section('title', 'Benvenuto in Biblios')

@section('content')

	<div class="row">
		<div class="col-md-6">

			@include('shared.lastBook')

		</div>
		<div class="col-md-6">

			@include('shared.prolificAuthor')

		</div>
	</div>
	

@endsection