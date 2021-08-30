@extends('layouts.main')

@section('container')
    <article>
        <h3>{{ $post->title }}</h3>
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts" class="d-block mt-3">Back to Posts</a>
@endsection

