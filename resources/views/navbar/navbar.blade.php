<nav id="navigation-bar" class="navbar navbar-expand-lg navbar-light bg-light box-shadow fixed-top">
    <a class="navbar-brand" href="/"><img class="img-responsive mr-3" src="/images/logo.png" alt="logo">Puppies Hub</a>
    <button class="navbar-toggler float-right mt-2" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>


        {!! Form::open(['method'=>'GET', 'class'=>'form-inline my-2 my-lg-0']) !!}
        <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>
        {!! Form::text('search', null, ['required',
                                    'id'=>'searchForm',
                                    'class'=>'form-control mr-sm-2 search-box box-shadow',
                                    'placeholder'=>'Search . . .']) !!}
        {!! Form::submit('Search',['class'=>'btn btn-primary mt-3 mt-md-0']) !!}
        {!! Form::close() !!}

        @guest
            <a href="/register" class="btn btn-link nav-link-main text-uppercase" role="button">Register</a>
            <a href="/login" class="btn btn-link nav-link-main text-uppercase" role="button">Login</a>
        @endguest

        @auth
            <a href="/dashboard" class="btn btn-link nav-link-main text-uppercase" role="button">
                Welcome, {{ Auth::user()->name }}
            </a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger nav-link-main text-uppercase">Logout</button>
            </form>
        @endauth
    </div>
</nav>
