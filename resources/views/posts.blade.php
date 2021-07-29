{{--@dd($posts)--}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Blog</h1>

    @foreach($posts as $post)
        <div>

            <article class="mb-5 border-bottom pb-3">
                <h2>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                </h2>
                <p>By. <a class="text-decoration-none" href="#">{{ $post->user->name }}</a> in
                    <a class="text-decoration-none"
                       href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                </h5>

                <p>{{ $post->excerpt }}</p>

                <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more..</a>
                <a href="/posts" class="btn btn-primary">Delete</a>
            </article>
        </div>

    @endforeach
@endsection
