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

                        <!-- provide each data here --> <!-- my announcement -->
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

                        <!-- just repeating data -->
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
                        <!-- end repeating -->

                    </div>

                </div>
                <div id="my_set" class="router-content">
                    <!-- for manage user's profile -->
                    <div class="section">
                        <h2 class="mb-3 text-primary text-uppercase">Profile</h2>

                        <form action="" method="post">
                            @csrf
                            <div class="picture-uploader mb-3">
                                <div class="profile-picture mr-3"></div>
                                <div class="upload">
                                    <p class="text-primary mb-0">Profile Picture</p>
                                    <div class="commit-button sticky-left">
                                        <label for="profile_image" class="box-shadow text-uppercase">Select File</label>
                                        <input id="profile_image" name="profile_image" type="file"
                                               accept="image/png, image/jpg, image/jpeg">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dashboard_first_name">Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                           id="dashboard_first_name" name="name" placeholder="Your name" required
                                           autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dashboard_email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           id="dashboard_email" name="email"
                                           placeholder="Enter email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dashboard_password">Old Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input type="password"
                                           class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}"
                                           id="dashboard_password" name="old_password"
                                           placeholder="Password" required>

                                    @if ($errors->has('old_password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dashboard_password">New Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input type="password"
                                           class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}"
                                           id="dashboard_password" name="new_password"
                                           placeholder="Password" required>

                                    @if ($errors->has('new_password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dashboard_password_retyped">New Re-type Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"></span>
                                    </div>
                                    <input type="password"
                                           class="form-control{{ $errors->has('new_password_confirmation') ? ' is-invalid' : '' }}"
                                           id="dashboard_password_retyped"
                                           name="new_password_confirmation" placeholder="Re-type passsword" required>

                                    @if ($errors->has('new_password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <button class="btn btn-primary text-uppercase float-right" type="submit"
                                    target="_blank" role="button">Save
                            </button>
                        </form>
                    </div>

                    <div class="section">
                        <h2 class="mb-3 text-primary text-uppercase mt-5">Verification</h2>
                        <form action="" method="post" class="indent-box">
                            @csrf
                            <div>
                                <p class="text-uppercase d-inline mr-3"><b class="text-primary"> Step One: </b>Id Card with
                                    Yourself</p>
                                <div class="commit-button mt-3">
                                    <label for="id_card_image" class="box-shadow text-primary text-uppercase">Select
                                        File</label>
                                    <input id="id_card_image" name="id_card_image" type="file"
                                           accept="image/png, image/jpg, image/jpeg">
                                </div>
                            </div>
                            <div class="mt-3">
                            <p class="text-uppercase d-inline mr-3"><b class="text-primary"> Step Two: </b>Send Request</p>
                                <button class="btn btn-primary text-uppercase " type="submit"
                                        target="_blank" role="button">Send Request
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
