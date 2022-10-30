
@extends('layouts.main')

@section('container')  
    <h1>{{ $post->title }}</h1>
    <p>By <a href="#" class="text-decoration-none">{{$post->user->name}}</a> in <a class="text-decoration-none" href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    {!! $post->body !!}

    <a href="/posts" class="d-block text-decoration-none mt-5">Back to Posts</a>
@endsection