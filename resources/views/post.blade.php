{{--@dd($post)--}}

@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-5">{{ $post->title }}</h2>

        <p>By.
            <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            in
            <a class="text-decoration-none"
               href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

        {{--        <h5>{{ $post->author }}</h5>--}}
        <p>{{ $post->body }}</p>
    </article>

    <a class="d-block mt-5" href="/posts">Back</a>
@endsection
