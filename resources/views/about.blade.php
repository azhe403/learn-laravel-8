@extends('layouts.main')

@section('container')

    <h1>About Me</h1>

    <img
        src="img/cat.jpg"
        alt=""
        class="img-thumbnail rounded-circle">
    <h3>I'm {{$name}}</h3>
    <h3>Email: {{$email}}</h3>
    <h3>Quotes: {{$quotes}}</h3>

@endsection
