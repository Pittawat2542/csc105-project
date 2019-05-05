@extends('static.layouts.app')

@section('content')
    <section id="auth" class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <h2 class="header mb-3">Reset Password</h2>

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="reset_password_email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="reset_password_email" name="email"
                                   placeholder="Enter email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-button">
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
