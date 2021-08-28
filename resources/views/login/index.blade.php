@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form action="/login" method="post">
                    @csrf

                    {{--<img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}

                    <div class="form-floating">
                        <input type="text" name="username" class="form-control"
                               id="username" placeholder="Username"
                               autofocus
                               required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword"
                               placeholder="Password"
                               required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    {{--                    <div class="checkbox mb-3">--}}
                    {{--                        <label>--}}
                    {{--                            <input type="checkbox" value="remember-me"> Remember me--}}
                    {{--                        </label>--}}
                    {{--                    </div>--}}
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    {{--                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>--}}
                </form>
                <small class="d-block text-center mt-4">Not registered? <a href="/register">Register now!</a></small>
            </main>
        </div>
    </div>
@endsection
