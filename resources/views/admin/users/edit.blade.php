@extends('layouts.app')

@section('content')
    <section id="edit_user" class="mb-5">
        <div class="container">
            <h1 class="mb-3 text-primary text-uppercase">Profile</h1>

            <div class="picture-uploader mb-3">
                <div class="profile-picture mr-3">
                    @if($user->photo)
                        <img src="{{ $user->photo ? $user->photo->path : '/images/default.png' }}"
                             class="img-responsive">
                    @endif
                </div>
                <div class="upload">
                    <p class="text-primary mb-0">Profile Picture</p>
                    <div class="commit-button sticky-left">
                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUserController@update',
                        Auth::user()->id], 'files'=>true]) !!}

                        {!! Form::label('photo', 'Select File', ['class'=> 'box-shadow text-uppercase']) !!}
                        {!! Form::file('photo', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    {!! Form::text('name', null, ['class'=>'form-control'.($errors->has('name') ? ' is-invalid' : '')]) !!}

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('email', 'E-mail') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    {!! Form::email('email', null, ['class'=>'form-control'.($errors->has('email') ? ' is-invalid' : '')]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('old_password', 'Old password') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    {!! Form::password('password', ['class'=>'form-control'.($errors->has('password') ? ' is-invalid' : '')]) !!}

                    @if ($errors->has('old_password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('new_password', 'New Password') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    {!! Form::password('new_password', ['class'=>'form-control'.($errors->has('new_password') ? ' is-invalid' : '')]) !!}

                    @if ($errors->has('new_password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('new_password_confirmation', 'Re-type password') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    {!! Form::password('new_password_confirmation', ['class'=>'form-control'.($errors->has('new_password_confirmation') ? ' is-invalid' : '')]) !!}

                    @if ($errors->has('new_password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('role', 'Role') !!}
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    {!! Form::select('role', [$user->role => $user->role()] + [1 => 'admin', 2 => 'mod', 3=>'user'], null,
            ['class'=>'form-control']) !!}

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            {!! Form::submit('Save', ['class'=>'btn btn-primary text-uppercase float-right']) !!}
            {!! Form::close() !!}
        </div>
        <br>
    </section>
@endsection