@extends('layouts.main')

@section('container')
    <article>
        <h3>{{ $post->title }}</h3>
        <p>By. Rezky in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection

