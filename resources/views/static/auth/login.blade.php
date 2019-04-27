@extends('static.layouts.app')

@section('content')
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
                            <input type="email" class="form-control" id="login_email" name="email"
                                   placeholder="Enter email" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login_password">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="password" class="form-control" id="login_password" name="password"
                                   placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group form-check container-fluid">
                        <div class="row">
                            <div class="col"><input type="checkbox" class="form-check-input" id="login_remember" name="remember">
                                <label class="form-check-label" for="login_remember">Remember Me</label>
                            </div>
                            <div class="col text-right"><a href="/static/password_reset">Forgot Password ?</a></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div id="btn-register" class="form-button">
                                    <button type="submit" class="btn btn-outline-primary">Register</button>
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
@endsection
