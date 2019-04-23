@extends('static.layouts.app')

@section('content')
    <section id="auth" class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <h2 class="header mb-3">Reset Password</h2>

                <form>
                    <div class="form-group">
                        <label for="reset_password_email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="email" class="form-control" id="reset_password_email" name="reset_password_email"
                                   placeholder="Enter email">
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