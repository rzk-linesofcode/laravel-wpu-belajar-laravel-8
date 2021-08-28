@extends('layouts.main')

@section('container')
    <article>
        <h3>{{ $post->title }}</h3>
        {!! $post->body !!}
    </article>
    <a href="/posts">Back to Posts</a>
@endsection

