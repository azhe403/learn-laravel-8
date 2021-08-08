{{--@dd($post)--}}

@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <p>By.
                    <a class="text-decoration-none"
                       href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                    in
                    <a class="text-decoration-none"
                       href="/posts?category={{ $post->category->slug }}"> {{ $post->category->name }}</a></p>

                {{--        <h5>{{ $post->author }}</h5>--}}

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid"
                     alt="{{ $post->category->name }}">

                <article class="my-3 fs-5">
                    {{--                <p>{{ $post->body }}</p>--}}
                    {!! $post->body !!}
                </article>

                <a class="d-block mt-5" href="/posts">Back</a>
            </div>
        </div>
    </div>



@endsection
