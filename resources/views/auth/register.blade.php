@extends('layouts.app')

@section('content')
    @guest
        <section id="auth" class="container mt-5 mb-5">
            <div class="row">
                <div class="col">
                    <h2 class="header mb-3">Register</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="register_first_name">Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       id="register_first_name" name="name" placeholder="Your name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="register_email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="register_email" name="email"
                                       placeholder="Enter email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="register_password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="password" class="form-control" id="register_password" name="password"
                                       placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="register_password_retyped">Re-type Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" id="register_password_retyped"
                                       name="password_confirmation" placeholder="Re-type passsword" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--                <div class="form-group">--}}
                        {{--                    <label for="register_last_name">Last Name</label>--}}
                        {{--                    <div class="input-group">--}}
                        {{--                        <div class="input-group-prepend">--}}
                        {{--                            <span class="input-group-text"></span>--}}
                        {{--                        </div>--}}
                        {{--                        <input type="text" class="form-control" id="register_last_name" name="last_name" placeholder="Your last name">--}}
                        {{--                    </div></div>--}}
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="register_accepted">
                            <label class="form-check-label" for="register_accepted">I agreed and accepted <a
                                    class="text-underline" href="#">terms and conditions</a></label>
                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn btn-primary">Register</button>
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
