{{--@dd($posts)--}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Blog</h1>

    @foreach($posts as $post)
        <div>

            <article class="mb-5">
                <h2>
                    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                <h5>{{ $post->author }}</h5>
                <p>{{ $post->excerpt }}</p>

                <a href="/posts">
                    <button class="btn btn-primary">Delete</button>
                </a>
            </article>
        </div>

    @endforeach
@endsection
