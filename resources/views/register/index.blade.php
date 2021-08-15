@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Register form</h1>
                <form>
                    {{--<img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}

                    <div class="form-floating">
                        <input type="name" class="form-control rounded-top" id="name" placeholder="Yourname">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="username" class="form-control" id="name" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom" id="floatingPassword"
                               placeholder="Password">
                        <label for="floatingPassword">Password</label>
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
