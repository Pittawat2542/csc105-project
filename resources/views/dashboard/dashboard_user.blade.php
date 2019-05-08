@extends('layouts.app-dashboard')

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
                        @if($wishlist)
                            @foreach($wishlist as $wish)
                            <div class="card no-border-radius border-0 box-shadow mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <img class="dashboard-img mr-3" src="{{$wish->photo ? $wish->photo->path : '/images/default.png'}}" alt="">
                                            <h2 class="d-inline text-uppercase text-primary">{{$wish->offer->title}}</h2></div>
                                        <div class="col-md-6 col-sm-12 text-right align-middle">

                                            {!! Form::open(['method'=>'DELETE', 'action'=>['WishlistController@destroy', $wish->id], 'class'=>'d-inline']) !!}
                                            {!! Form::submit('&#128148;&nbsp;Unfavourite',
                                            ['class'=>'btn btn-light box-shadow text-danger text-uppercase']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                            <div class="user-box">
                                <div class="card no-border-radius border-0 box-shadow mb-3">
                                    <div class="card-body">
                                        <h2 class="text-primary text-center">Currently, nothing in favourites!</h2>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($wishlist)
                            @if(count($wishlist) == 0)
                                <div class="user-box">
                                    <div class="card no-border-radius border-0 box-shadow mb-3">
                                        <div class="card-body">
                                            <h2 class="text-primary text-center">Currently, nothing in favourites!</h2>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endif
                    </div>
                </div>


                <div id="my_ann" class="router-content">
                    <div class="row mb-3">
                        <div class="col text-right">
                            <a class="btn btn-primary text-uppercase" href="/announcement/create"
                               target="_blank" role="button">Add New</a>
                        </div>
                    </div>

                    <div class="data-list">
                        @if($offers)
                            <div class="data-spanner" data-span="false"></div>
                            @foreach($offers as $offer)
                                <div class="card no-border-radius border-0 box-shadow mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img class="dashboard-img mr-3"
                                                             src="{{ $offer->photo ? $offer->photo->path : '/images/default.png' }}"
                                                             alt="">
                                                    </div>
                                                    <div class="col-md-10 align-middle">
                                                        <h2 class="d-inline text-uppercase text-primary">{{$offer->name}}</h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 text-right align-middle">
                                                <a href="{{route('edit.offer', $offer->id)}}"
                                                   class="btn btn-light box-shadow text-uppercase text-primary">&#128221;&nbsp;EDIT</a>

                                                {!! Form::open(['method'=>'DELETE', 'action'=>['OffersController@destroy', $offer->id], 'class'=>'d-inline']) !!}
                                                {!! Form::submit('&#128465;&nbsp;DELETE',
                                                ['class'=>'btn btn-light box-shadow text-danger text-uppercase']) !!}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="user-box">
                                <div class="card no-border-radius border-0 box-shadow mb-3">
                                    <div class="card-body">
                                        <h2 class="text-primary text-center">Currently, no announcements!</h2>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($offers)
                            @if(count($offers) == 0)
                                <div class="user-box">
                                    <div class="card no-border-radius border-0 box-shadow mb-3">
                                        <div class="card-body">
                                            <h2 class="text-primary text-center">Currently, no announcements!</h2>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                    </div>

                </div>
                <div id="my_set" class="router-content">
                    <!-- for manage user's profile -->
                    <div class="section">
                        <h2 class="mb-3 text-primary text-uppercase">Profile</h2>
                        
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
                        {!! Form::submit('Save', ['class'=>'btn btn-primary text-uppercase float-right']) !!}
                        {!! Form::close() !!}
                    </div>

                    @if($user->is_verified==0)
                        <div class="section">
                            <h2 class="mb-3 text-primary text-uppercase mt-5">Verification</h2>
                            {!! Form::open(['method'=>'POST', 'action'=>'UserController@updateId', 'files'=>true]) !!}
                            <div>
                                <p class="text-uppercase d-inline mr-3"><b class="text-primary"> Step One: </b>Id Card
                                    with
                                    Yourself</p>
                                <div class="commit-button mt-3">
                                    {!! Form::label('photoId', 'Select File', ['class'=> 'box-shadow text-primary text-uppercase']) !!}
                                    {!! Form::file('photoId', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="text-uppercase d-inline mr-3"><b class="text-primary"> Step Two: </b>Send
                                    Request</p>
                                {!! Form::submit('Send Request', ['class'=>'btn btn-primary text-uppercase']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <br>
    </section>

@endsection
