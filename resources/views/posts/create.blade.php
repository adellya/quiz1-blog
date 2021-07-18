@extends('layouts.master')

@section('title', 'Add New Post')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Add New Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
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
    
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control form-control-lg">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category" id="category"class="custom-select @error('category_id') is-invalid @enderror" required>
                <option>--Choose one--</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="ckeditor form-control" style="height:150px" name="text" id="text"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Publish</button>
    </form>
</div>

@endsection
