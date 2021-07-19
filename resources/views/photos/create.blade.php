@extends('layouts.master')

@section('title', 'Upload Photo')

@section('content')

	<div class="container">
		<h2>Photos</h2>

		@if ($errors->any())
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		
		<form action="{{ route('photos.store') }}" method="post" accept-charset="UTF-8" role="form" enctype="multipart/form-data">
			@csrf

			<div class="form-group">
				<label for="photo">Photo</label>
				<input type="file" name="photo" id="photo">
			</div>
			<div class="form-group">
				<label for="text">Text</label>
				<textarea name="text" id="text" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Upload</button>
		</form>
	</div>

@endsection