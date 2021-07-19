@extends('layouts.master')

@section('title', 'All Photo')

@section('content')

	<h2>Photos</h2>

	@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
	@endif
	
@endsection