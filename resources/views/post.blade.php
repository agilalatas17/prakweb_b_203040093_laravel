
@extends('layouts.main')

@section('container')  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $post->title }}</h1>

                @if($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid ">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid ">
                @endif

                <p>By <a href="/posts?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a class="text-decoration-none" href="/post?category={{$post->category->slug}}">{{$post->category->name}}</a></p>
                  
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block text-decoration-none mt-5">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection