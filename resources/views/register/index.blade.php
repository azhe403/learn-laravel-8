@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Register form</h1>
                <form action="/register" method="POST">
                    @csrf

                    {{--<img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}

                    <div class="form-floating">
                        <input name="name" type="text"
                               class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                               placeholder="Yourname" value="{{ old('name') }}" required>
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="username" type="text" class="form-control @error('username') is-invalid @enderror"
                               id="name" placeholder="Username" value="{{ old('username') }}" required>
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required>
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="password" type="password"
                               class="form-control rounded-bottom @error('password') is-invalid @enderror"
                               id="floatingPassword" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{--                    <div class="checkbox mb-3">--}}
                    {{--                        <label>--}}
                    {{--                            <input type="checkbox" value="remember-me"> Remember me--}}
                    {{--                        </label>--}}
                    {{--                    </div>--}}
                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
                    {{--                    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>--}}
                </form>
                <small class="d-block text-center mt-4">Already registered? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection
