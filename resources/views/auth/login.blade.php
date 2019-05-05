@extends('static.layouts.app')

@section('content')
    @guest
        <section id="auth" class="container mt-5 mb-5">
            <div class="row">
                <div class="col">
                    <h2 class="header mb-3">Login</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="login_email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="login_email" name="email"
                                       placeholder="Enter email" value="{{ old("email") }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="login_password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="login_password" name="password"
                                       placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group form-check container-fluid">
                            <div class="row">
                                <div class="col"><input type="checkbox" class="form-check-input" id="login_remember" name="remember">
                                    <label class="form-check-label" for="login_remember">Remember Me</label>
                                </div>
                                <div class="col text-right"><a href="/password/reset">Forgot Password?</a></div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div id="btn-register" class="form-button">
                                        <a class="btn btn-outline-primary" href="/register">Register</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div id="btn-login" class="form-button">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endguest

    @auth
        <script>window.location = "/static/dashboard";</script>
    @endauth
@endsection
