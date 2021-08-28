@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>

                <a class="btn btn-success" href="./../posts/">
                    <span data-feather="arrow-left"></span> Back to My Post
                </a>
                <a class="btn btn-warning" href="">
                    <span data-feather="edit"></span> Edit
                </a>
                <a class="btn btn-danger" href="">
                    <span data-feather="x-circle"></span> Delete
                </a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3"
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
