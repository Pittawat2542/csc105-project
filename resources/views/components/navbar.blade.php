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

        {!! Form::open(['method'=>'GET', 'class'=>'form-inline my-2 my-md-0']) !!}
        <label class="mr-2 search-icon" for=""><i class="fas fa-search" id="search-icon"></i></label>
        {!! Form::text('search', null, ['required',
                                    'id'=>'searchForm',
                                    'class'=>'form-control mr-sm-2 search-box box-shadow',
                                    'placeholder'=>'Search . . .']) !!}
        {!! Form::close() !!}

        @guest
            <a href="/register" class="btn btn-link nav-link-main text-uppercase" role="button">Register</a>
            <a href="/login" class="btn btn-link nav-link-main text-uppercase" role="button">Login</a>
        @endguest

        @auth
            <a href="/dashboard" class="btn btn-link nav-link-main text-uppercase" role="button">
                @if(Auth::user()->photo)
                    <img src="{{ Auth::user()->photo ? ('/' . Auth::user()->photo->path) : '/images/default.png' }}"
                         class="img-responsive rounded-circle" style="width:2rem; height: 2rem;">
                @endif
                {{ Auth::user()->name }}
            </a>
            @if(Auth::user()->isAdmin())
                | <a href="{{route('admin')}}" class="btn btn-link nav-link-main text-uppercase" role="button"><i
                        class="fas fa-user-cog"></i> Admin
                </a>
            @endif
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger nav-link-main text-uppercase">Logout</button>
            </form>
        @endauth
    </div>
</nav>
