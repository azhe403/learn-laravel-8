{{--@dd($post)--}}

@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{ $post->title }}</h2>

        <p>By. Azhe-kun in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

        <h5>{{ $post->author }}</h5>
        <p>{{ $post->body }}</p>
    </article>

    <a href="/posts">Back</a>
@endsection
