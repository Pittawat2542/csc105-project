@extends('static.layouts.app-dashboard')

@section('content')

    <section id="dashboard" class="mb-5">
        <div class="container">
            <h1 class="mb-3 text-uppercase">Dashboard</h1>

            <div class="router-tabs ml-3">
                <p class="router-item text-uppercase" data-target="#verifications">Verification Requests</p>
                <p class="router-item text-uppercase" data-target="#users">Users</p>
                <p class="router-item text-uppercase" data-target="#announcements">Announcements</p>
            </div>

            <div class="router-display">

                <div id="verifications" class="router-content">
{{--                    <div class="row mb-3">--}}
{{--                        <div class="col">--}}
{{--                            <form class="form-inline my-2 my-lg-0 float-right">--}}
{{--                                @csrf--}}
{{--                                <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>--}}
{{--                                <input class="form-control mr-sm-2 search-box box-shadow" type="search"--}}
{{--                                       placeholder="Search . . ."--}}
{{--                                       aria-label="Search">--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}


                    <div class="data-list">
                        <div class="data-spanner" data-span="false"></div>
                        @if($toVerify)
                            @foreach($toVerify as $personToVerify)
                                @if(!$personToVerify->user->isVerified())
                                    <!-- provide each data here --> <!-- my requested list -->
                                    <div class="user-box">
                                        <div class="card no-border-radius border-0 box-shadow mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <img class="dashboard-img mr-3 picture"
                                                                     src="{{ $personToVerify->user->photo ? $personToVerify->user->photo->path : '/images/default.png' }}" alt="">
                                                            </div>
                                                            <div class="col-md-10 align-middle">
                                                                <h2 class="d-inline text-uppercase text-primary name-detail">
                                                                    {{ $personToVerify->user->name }}</h2>
                                                                <p>Registered Date: {{ $personToVerify->user->created_at }}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 text-right align-middle">

                                                        {!! Form::open(['method'=>'DELETE',
                                                        'action'=>['AdminPhotoController@destroy', $personToVerify->id]]) !!}

                                                        {!! Form::submit('&#10006;&nbsp;REJECT', [
                                                        'class'=>'btn btn-light box-shadow text-danger text-uppercase'
                                                        ]) !!}

                                                        {!! Form::close() !!}

                                                        {!! Form::open(['method'=>'PATCH',
                                                        'action'=>['AdminController@approve', $personToVerify->user->id]]) !!}

                                                        {!! Form::submit('&#9745;&nbsp;APPROVE', [
                                                        'class'=>'btn btn-light box-shadow text-uppercase'
                                                        ]) !!}

                                                        {!! Form::close() !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="other-detail-box box-shadow" data-span="false">
                                            <div class="other-profile"
                                                 style="background-image: url('{{$personToVerify->path}}');"></div>
                                            <a href="{{$personToVerify->path}}" target="_blank" class="btn btn-default">
                                                Click to see bigger picture</a>
                                            <div class="other-information">
                                                {{$personToVerify->user->email}} || {{$personToVerify->user->location}}
                                                <br> {{$personToVerify->user->description}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>


                <div id="users" class="router-content">
                    <!-- check user's information from here -->
{{--                    <div class="row mb-3">--}}
{{--                        <div class="col">--}}
{{--                            <form class="form-inline my-2 my-lg-0 float-right">--}}
{{--                                @csrf--}}
{{--                                <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>--}}
{{--                                <input class="form-control mr-sm-2 search-box box-shadow" type="search"--}}
{{--                                       placeholder="Search . . ."--}}
{{--                                       aria-label="Search">--}}
{{--                            </form>--}}
{{--                            <a class="btn btn-primary text-uppercase" href="/static/users/create"--}}
{{--                               target="_blank" role="button">Add New</a></div>--}}
{{--                    </div>--}}

                    <div class="data-list">
                        <div class="data-spanner" data-span="false"></div>
                    @if($users)
                        @foreach($users as $user)
                            <!-- our users -->
                            <div class="card no-border-radius border-0 box-shadow mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="dashboard-img mr-3"
                                                         src="{{ $user->photo ? $user->photo->path : '/images/default.png' }}" alt="">
                                                </div>
                                                <div class="col-md-10 align-middle">
                                                    <h2 class="d-inline text-uppercase text-primary">
                                                        {{ $user->name }}</h2>
                                                    <p>Registered Date: {{ $user->created_at }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12 text-right align-middle">
                                            {!! Form::open(['method'=>'DELETE',
                                            'action'=>['AdminUsersController@destroy', $user->id]]) !!}

                                            {!! Form::submit('&#10006;&nbsp;DELETE', [
                                            'class'=>'btn btn-light box-shadow text-danger text-uppercase'
                                            ]) !!}

                                            {!! Form::close() !!}

                                            {!! Form::open(['method'=>'GET',
                                            'action'=>['AdminUsersController@edit', $user->id]]) !!}

                                            {!! Form::submit('&#9745;&nbsp;EDIT', [
                                            'class'=>'btn btn-light box-shadow text-uppercase'
                                            ]) !!}

                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    </div>

                </div>

                <div id="announcements" class="router-content">
                    <!-- Manage user's announcement -->
                    <div class="row mb-3">
                        <div class="col">
                            <form class="form-inline my-2 my-lg-0 float-right">
                                @csrf
                                <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>
                                <input class="form-control mr-sm-2 search-box box-shadow" type="search"
                                       placeholder="Search . . ."
                                       aria-label="Search">
                            </form>
                            <a class="btn btn-primary text-uppercase" href="/static/announcement/create"
                               target="_blank" role="button">Add New</a>
                        </div>
                    </div>


                    <div class="card no-border-radius border-0 box-shadow mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="dashboard-img mr-3"
                                                 src="/images/225.jpeg" alt="">
                                        </div>
                                        <div class="col-md-10 align-middle">
                                            <h2 class="d-inline text-uppercase text-primary">Puppy Name</h2>
                                            <p>Announcer</p>
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
                                    <form class="d-inline" method="POST" action="">
                                        @csrf
                                        <button class="btn btn-light box-shadow text-danger text-uppercase">
                                            &#128465;&nbsp;DELETE
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
    </section>

@endsection
