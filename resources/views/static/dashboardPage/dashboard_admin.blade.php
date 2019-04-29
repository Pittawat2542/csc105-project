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
                    <div class="row mb-3">
                        <div class="col">
                            <form class="form-inline my-2 my-lg-0 float-right">
                                @csrf
                                <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>
                                <input class="form-control mr-sm-2 search-box box-shadow" type="search"
                                       placeholder="Search . . ."
                                       aria-label="Search">
                            </form>
                        </div>
                    </div>


                    <div class="data-list">
                        <div class="data-spanner" data-span="false"></div>

                        <!-- provide each data here --> <!-- my requested list -->
                        <div class="user-box">
                            <div class="card no-border-radius border-0 box-shadow mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="dashboard-img mr-3 picture"
                                                         src="/images/31.jpg" alt="">
                                                </div>
                                                <div class="col-md-10 align-middle">
                                                    <h2 class="d-inline text-uppercase text-primary name-detail">
                                                        Firstname
                                                        Lastname</h2>
                                                    <p>Registered Date: 01/01/2001</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12 text-right align-middle">
                                            <form class="d-inline mr-2" method="POST" action="">
                                                @csrf
                                                <button class="btn btn-light box-shadow text-danger text-uppercase">
                                                    &#10006;&nbsp;REJECT
                                                </button>
                                            </form>
                                            <form class="d-inline" method="POST" action="">
                                                @csrf
                                                <button class="btn btn-light box-shadow text-uppercase">
                                                    &#9745;&nbsp;APPROVE
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="other-detail-box box-shadow" data-span="false">
                                <div class="other-profile"
                                     style="background-image: url('/images/31.jpg');"></div>
                                <div class="other-information">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, quasi!
                                </div>
                            </div>
                        </div>

                        <div class="user-box">
                            <div class="card no-border-radius border-0 box-shadow mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="dashboard-img mr-3 picture"
                                                         src="/images/31.jpg" alt="">
                                                </div>
                                                <div class="col-md-10 align-middle">
                                                    <h2 class="d-inline text-uppercase text-primary name-detail">
                                                        Firstname
                                                        Lastname</h2>
                                                    <p>Registered Date: 01/01/2001</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12 text-right align-middle">
                                            <form class="d-inline mr-2" method="POST" action="">
                                                @csrf
                                                <button class="btn btn-light box-shadow text-danger text-uppercase">
                                                    &#10006;&nbsp;REJECT
                                                </button>
                                            </form>
                                            <form class="d-inline" method="POST" action="">
                                                @csrf
                                                <button class="btn btn-light box-shadow text-uppercase">
                                                    &#9745;&nbsp;APPROVE
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="other-detail-box box-shadow" data-span="false">
                                <div class="other-profile"
                                     style="background-image: url('/images/31.jpg');"></div>
                                <div class="other-information">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, quasi!
                                </div>
                            </div>
                        </div>

                        <div class="user-box">
                            <div class="card no-border-radius border-0 box-shadow mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="dashboard-img mr-3 picture"
                                                         src="/images/31.jpg" alt="">
                                                </div>
                                                <div class="col-md-10 align-middle">
                                                    <h2 class="d-inline text-uppercase text-primary name-detail">
                                                        Firstname
                                                        Lastname</h2>
                                                    <p>Registered Date: 01/01/2001</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12 text-right align-middle">
                                            <form class="d-inline mr-2" method="POST" action="">
                                                @csrf
                                                <button class="btn btn-light box-shadow text-danger text-uppercase">
                                                    &#10006;&nbsp;REJECT
                                                </button>
                                            </form>
                                            <form class="d-inline" method="POST" action="">
                                                @csrf
                                                <button class="btn btn-light box-shadow text-uppercase">
                                                    &#9745;&nbsp;APPROVE
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="other-detail-box box-shadow" data-span="false">
                                <div class="other-profile"
                                     style="background-image: url('/images/31.jpg');"></div>
                                <div class="other-information">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, quasi!
                                </div>
                            </div>
                        </div>

                        <div class="user-box">
                            <div class="card no-border-radius border-0 box-shadow mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img class="dashboard-img mr-3 picture"
                                                         src="/images/31.jpg" alt="">
                                                </div>
                                                <div class="col-md-10 align-middle">
                                                    <h2 class="d-inline text-uppercase text-primary name-detail">
                                                        Firstname
                                                        Lastname</h2>
                                                    <p>Registered Date: 01/01/2001</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12 text-right align-middle">
                                            <form class="d-inline mr-2" method="POST" action="">
                                                @csrf
                                                <button class="btn btn-light box-shadow text-danger text-uppercase">
                                                    &#10006;&nbsp;REJECT
                                                </button>
                                            </form>
                                            <form class="d-inline" method="POST" action="">
                                                @csrf
                                                <button class="btn btn-light box-shadow text-uppercase">
                                                    &#9745;&nbsp;APPROVE
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="other-detail-box box-shadow" data-span="false">
                                <div class="other-profile"
                                     style="background-image: url('/images/31.jpg');"></div>
                                <div class="other-information">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, quasi!
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="users" class="router-content">
                    <!-- check user's information from here -->
                    <div class="row mb-3">
                        <div class="col">
                            <form class="form-inline my-2 my-lg-0 float-right">
                                @csrf
                                <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>
                                <input class="form-control mr-sm-2 search-box box-shadow" type="search"
                                       placeholder="Search . . ."
                                       aria-label="Search">
                            </form>
                            <a class="btn btn-primary text-uppercase" href="/static/users/create"
                               target="_blank" role="button">Add New</a></div>
                    </div>

                    <div class="data-list">
                        <div class="data-spanner" data-span="false"></div>

                        <!-- our users -->
                        <div class="card no-border-radius border-0 box-shadow mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img class="dashboard-img mr-3"
                                                     src="/images/31.jpg" alt="">
                                            </div>
                                            <div class="col-md-10 align-middle">
                                                <h2 class="d-inline text-uppercase text-primary">Firstname Lastname</h2>
                                                <p>Registered Date: 01/01/2001</p>
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
                                                     src="/images/31.jpg" alt="">
                                            </div>
                                            <div class="col-md-10 align-middle">
                                                <h2 class="d-inline text-uppercase text-primary">Firstname Lastname</h2>
                                                <p>Registered Date: 01/01/2001</p>
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
                                                     src="/images/31.jpg" alt="">
                                            </div>
                                            <div class="col-md-10 align-middle">
                                                <h2 class="d-inline text-uppercase text-primary">Firstname Lastname</h2>
                                                <p>Registered Date: 01/01/2001</p>
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
                                                     src="/images/31.jpg" alt="">
                                            </div>
                                            <div class="col-md-10 align-middle">
                                                <h2 class="d-inline text-uppercase text-primary">Firstname Lastname</h2>
                                                <p>Registered Date: 01/01/2001</p>
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
