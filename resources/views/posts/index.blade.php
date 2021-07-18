@extends('layouts.master')

@section('title', 'All Post')

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>All Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success btn-sm" href="{{ route('posts.create') }}"> Add New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ ++$i }}</td>
            <td><a href="{{ route('posts.show', $post->slug)}}">{{ $post->title }}</a></td>
            <td>{{ $post->category->name }}</td>
            <td>
                <form action="{{ route('posts.destroy', $post->slug) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('posts.show', $post->slug) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit', $post->slug) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $posts->links() !!}
    
</div>
@endsection
