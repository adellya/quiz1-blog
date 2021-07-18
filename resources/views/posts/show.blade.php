@extends('layouts.master')

@section('title', 'Title')

@section('content')

    <div class="container py-5">
        <h2>{{ $post->title }}</h2>
        <p>Posted on <strong>{{ $post->category->name }}</strong> at {{ $post->created_at}}</p>
        <p>{!! $post->text !!}</p>
    </div>

@endsection