@extends('static.layouts.app')

@section('content')
<section id="auth" class="container mt-5 mb-5">
    <div class="row">
        <div class="col">
            <h2 class="header mb-3">Register</h2>

            <form>
                <div class="form-group">
                    <label for="register_email">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="email" class="form-control" id="register_email" name="register_email" placeholder="Enter email">
                    </div></div>
                <div class="form-group">
                    <label for="register_password">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="password" class="form-control" id="register_password" name="register_password" placeholder="Password">
                    </div></div>
                <div class="form-group">
                    <label for="register_password_retyped">Re-type Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="password" class="form-control" id="register_password_retyped" name="register_password_retyped" placeholder="Re-type passsword">
                    </div></div>
                <div class="form-group">
                    <label for="register_first_name">First Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="text" class="form-control" id="register_first_name" name="register_first_name" placeholder="Your first name">
                    </div></div>
                <div class="form-group">
                    <label for="register_last_name">Last Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <input type="text" class="form-control" id="register_last_name" name="register_last_name" placeholder="Your last name">
                    </div></div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="register_accepted">
                    <label class="form-check-label" for="register_accepted">I agreed and accepted <a class="text-underline" href="#">terms and conditions</a></label>
                </div>
                <div class="form-button">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection