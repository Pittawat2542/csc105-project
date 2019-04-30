@extends('static.layouts.app-dashboard')

@section('content')

    <section id="dashboard" class="mb-5">
        <div class="container">
            <h1 class="mb-3 text-uppercase">Dashboard</h1>

            <div class="router-tabs ml-3">
                <p class="router-item text-uppercase" data-target="#my_fav">My Favourites</p>
                <p class="router-item text-uppercase" data-target="#my_ann">My Announcements</p>
                <p class="router-item text-uppercase" data-target="#my_set">Settings</p>
            </div>

            <div class="router-display">

                <div id="my_fav" class="router-content">
                    <div class="data-list">
                        <div class="data-spanner" data-span="false"></div>

                        <div class="card no-border-radius border-0 box-shadow mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <img class="dashboard-img mr-3" src="https://bit.ly/1KUXdA3" alt="">
                                        <h2 class="d-inline text-uppercase text-primary">Puppy Name</h2></div>
                                    <div class="col-md-6 col-sm-12 text-right align-middle">
                                        <form method="POST" action="">
                                            @csrf
                                            <button class="btn btn-light box-shadow text-danger text-uppercase">
                                                &#128148;&nbsp;Unfavourite
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="my_ann" class="router-content">
                    <div class="row mb-3">
                        <div class="col text-right">
                            <a class="btn btn-primary text-uppercase" href="/static/announcement/create"
                               target="_blank" role="button">Add New</a>
                        </div>
                    </div>

                    <div class="data-list">
                        <div class="data-spanner" data-span="false"></div>
                    @if($offers)
                        @foreach($offers as $offer)
                        <div class="card no-border-radius border-0 box-shadow mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img class="dashboard-img mr-3"
                                                     src="https://bit.ly/1KUXdA3" alt="">
                                            </div>
                                            <div class="col-md-10 align-middle">
                                                <h2 class="d-inline text-uppercase text-primary">{{$offer->name}}</h2>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 text-right align-middle">
                                        <form class="d-inline mr-2" method="POST" action="">
                                            @csrf
                                            <button class="btn btn-light box-shadow text-uppercase">
                                                &#128221;&nbsp;EDIT
                                            </button>
                                        </form>

                                        {!! Form::open(['method'=>'DELETE', 'action'=>['OffersController@destroy', $offer->id]]) !!}
                                            {!! Form::submit('&#128465;&nbsp;DELETE',
                                            ['class'=>'btn btn-light box-shadow text-danger text-uppercase']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif

                    </div>

                </div>
                <div id="my_set" class="router-content">
                    <!-- for manage user's profile -->
                    <div class="section">
                        <h2 class="mb-3 text-primary text-uppercase">Profile</h2>

                            <div class="picture-uploader mb-3">
                                <div class="profile-picture mr-3">
                                    <img src="{{$user->photo->path}}" class="img-responsive">
                                </div>
                                <div class="upload">
                                    <p class="text-primary mb-0">Profile Picture</p>
                                    <div class="commit-button sticky-left">
                                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UserController@update',
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
                                    {!! Form::text('name', null, ['class'=>'form-control'.$errors->has('name') ? ' is-invalid' : '']) !!}

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
                                    {!! Form::email('email', null, ['class'=>'form-control'.$errors->has('email') ? ' is-invalid' : '']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('old_password', 'Old password') !!}
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    {!! Form::password('password', null, ['class'=>'form-control'.$errors->has('password') ? ' is-invalid' : '']) !!}

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
                                    {!! Form::text('new_password', null, ['class'=>'form-control'.$errors->has('new_password') ? ' is-invalid' : '']) !!}

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
                                    {!! Form::text('new_password_confirmation', null, ['class'=>'form-control'.$errors->has('new_password_confirmation') ? ' is-invalid' : '']) !!}

                                    @if ($errors->has('new_password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {!! Form::submit('Save', ['class'=>'btn btn-primary text-uppercase float-right']) !!}
                        {!! Form::close() !!}
                    </div>

                    @if($user->is_verified==0)
                    <div class="section">
                        <h2 class="mb-3 text-primary text-uppercase mt-5">Verification</h2>
                        {!! Form::open(['method'=>'POST', 'action'=>'UserController@updateId', 'files'=>true]) !!}
                            <div>
                                <p class="text-uppercase d-inline mr-3"><b class="text-primary"> Step One: </b>Id Card with
                                    Yourself</p>
                                <div class="commit-button mt-3">
                                    {!! Form::label('photoId', 'Select File', ['class'=> 'box-shadow text-primary text-uppercase']) !!}
                                    {!! Form::file('photoId', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="mt-3">
                            <p class="text-uppercase d-inline mr-3"><b class="text-primary"> Step Two: </b>Send Request</p>
                                {!! Form::submit('Send Request', ['class'=>'btn btn-primary text-uppercase']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection
