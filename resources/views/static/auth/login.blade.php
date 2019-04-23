@extends('static.layouts.app')

@section('content')
    <section id="auth" class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <h2 class="header mb-3">Login</h2>

                <form>
                    <div class="form-group">
                        <label for="login_email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="email" class="form-control" id="login_email" name="login_email"
                                   placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login_password">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="password" class="form-control" id="login_password" name="login_password"
                                   placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group form-check container-fluid">
                        <div class="row">
                            <div class="col"><input type="checkbox" class="form-check-input" id="login_remember">
                                <label class="form-check-label" for="login_remember">Remember Me</label>
                            </div>
                            <div class="col text-right"><a href="/static/password_reset">Forgot Password ?</a></div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-button">
                                    <button type="submit" class="btn btn-outline-primary">Register</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-button">
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