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
                    <div class="data-list">
                        @if($toVerify)
                            <div class="data-spanner" data-span="false"></div>
                            @foreach($toVerify as $personToVerify)
                                @if(!$personToVerify->user->isVerified())
                                    <div class="user-box">
                                        <div class="card no-border-radius border-0 box-shadow mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <img class="dashboard-img mr-3 picture"
                                                                     src="{{ $personToVerify->user->photo ? $personToVerify->user->photo->path : '/images/default.png' }}"
                                                                     alt="">
                                                            </div>
                                                            <div class="col-md-10 align-middle">
                                                                <h2 class="d-inline text-uppercase text-primary name-detail">
                                                                    {{ $personToVerify->user->name }}</h2>
                                                                <p>Registered
                                                                    Date: {{ $personToVerify->user->created_at }}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 col-sm-12 text-right align-middle">

                                                        {!! Form::open(['method'=>'PATCH',
'action'=>['AdminController@approve', $personToVerify->user->id], 'class'=>'d-inline']) !!}

                                                        {!! Form::submit('✅&nbsp;APPROVE', [
                                                        'class'=>'btn btn-light box-shadow text-uppercase text-primary'
                                                        ]) !!}

                                                        {!! Form::close() !!}

                                                        {!! Form::open(['method'=>'DELETE',
                                                        'action'=>['AdminPhotoController@destroy', $personToVerify->id], 'class'=>'d-inline mr-3']) !!}

                                                        {!! Form::submit('❌&nbsp;REJECT', [
                                                        'class'=>'btn btn-light box-shadow text-danger text-uppercase'
                                                        ]) !!}

                                                        {!! Form::close() !!}


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="other-detail-box box-shadow row ml-1" data-span="false">
                                            <div class="col-md-6 col-sm-12 text-center align-middle row">
                                                <div class="col-md-6 col-sm-12 text-center align-middle">
                                                    <div class="other-profile "
                                                         style="background-image: url('{{$personToVerify->path}}');"></div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 text-center align-middle mt-5">
                                                    <a href="{{$personToVerify->path}}" target="_blank"
                                                       class="btn btn-primary">
                                                        Click to see bigger picture</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="other-information">
                                                    <h4 class="text-primary">User information</h4>
                                                    @isset($personToVerify->user->email)
                                                        <p>Email: {{$personToVerify->user->email}}</p>
                                                    @endisset
                                                    @isset($personToVerify->user->location)
                                                        <p>Location: {{$personToVerify->user->location}}</p>
                                                    @endisset
                                                    @isset($personToVerify->user->description)
                                                        <p>Description: {{$personToVerify->user->description}}</p>
                                                    @endisset
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        @if($toVerify)
                            @foreach($toVerify as $key => $value)
                                @if ($key == 0)
                                    @if($value->user->isVerified())
                                        <div class="user-box">
                                            <div class="card no-border-radius border-0 box-shadow mb-3">
                                                <div class="card-body">
                                                    <h2 class="text-primary text-center">Currently, no user verification
                                                        request!</h2>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                            @if (count($toVerify) == 0)
                                <div class="user-box">
                                    <div class="card no-border-radius border-0 box-shadow mb-3">
                                        <div class="card-body">
                                            <h2 class="text-primary text-center">Currently, no user verification
                                                request!</h2>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>

                <div id="users" class="router-content">
                    <div class="data-list">
                        @if($users)
                            <div class="data-spanner" data-span="false"></div>
                            @foreach($users as $user)
                                <div class="card no-border-radius border-0 box-shadow mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img class="dashboard-img mr-3"
                                                             src="{{ $user->photo ? $user->photo->path : '/images/default.png' }}"
                                                             alt="">
                                                    </div>
                                                    <div class="col-md-10 align-middle">
                                                        <h2 class="d-inline text-uppercase text-primary">
                                                            {{ $user->name }}</h2>
                                                        <p>Registered Date: {{ $user->created_at }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 text-right align-middle">
                                                {!! Form::open(['method'=>'GET',
  'action'=>['AdminUsersController@edit', $user->id], 'class' => 'd-inline']) !!}

                                                {!! Form::submit('&#128221;&nbsp;EDIT', [
                                                'class'=>'btn btn-light box-shadow text-uppercase'
                                                ]) !!}

                                                {!! Form::close() !!}

                                                {!! Form::open(['method'=>'DELETE',
                                                'action'=>['AdminUsersController@destroy', $user->id], 'class' => 'd-inline mr-2']) !!}

                                                {!! Form::submit('&#128465;&nbsp;DELETE', [
                                                'class'=>'btn btn-light box-shadow text-danger text-uppercase'
                                                ]) !!}

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
                                        <h2 class="text-primary text-center">Currently, no users!</h2>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

                <div id="announcements" class="router-content">
                    <div class="data-list">
                        @if ($offers)
                            <div class="data-spanner" data-span="false"></div>
                            @foreach($offers as $offer)
                                <div class="card no-border-radius border-0 box-shadow mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img class="dashboard-img mr-3"
                                                             src="{{$offer->photo ? $offer->photo->path : ''}}" alt="">
                                                    </div>
                                                    <div class="col-md-10 align-middle">
                                                        <h2 class="d-inline text-uppercase text-primary">{{$offer->name}}</h2>
                                                        <p>{{$offer->user->name}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 text-right align-middle">
                                                <a href="{{route('edit.offer', $offer->id)}}"
                                                   class="btn btn-light box-shadow text-uppercase">&#128465;&nbsp;EDIT</a>

                                                {!! Form::open(['method'=>'DELETE', 'action'=>['OffersController@destroy', $offer->id]]) !!}
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
            </div>
        </div>
        <br>
    </section>

@endsection
