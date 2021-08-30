@extends('layouts.main')

@section('container')
    <h2 class="mb-3">Posts by {{ $author }}</h2>

    @foreach ( $posts as $post)
        <article class="mb-5">
            <h3><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
        </article>
        
    @endforeach
@endsection