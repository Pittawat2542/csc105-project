@extends('layouts.app')

@section('content')
<section id="category" class="container mb-3">

    <section id="category-header" class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <h1>{{$category->breed}}</h1>
            </div>
{{--            <div id="sort-group" class="col-md-8">--}}
{{--                <div class="">--}}
{{--                    <label for="itemsPerPage" class="d-inline mr-4 pt-2">ITEMS PER PAGE</label>--}}
{{--                    <select name="itemsPerPage" class="d-inline mr-4 box-shadow">--}}
{{--                        <option value="18">18</option>--}}
{{--                        <option value="36">36</option>--}}
{{--                        <option value="54">54</option>--}}
{{--                    </select>--}}
{{--                    <div class="dropdown p-2 box-shadow sorting text-center">--}}
{{--                        <img src="https://www.materialui.co/materialIcons/content/sort_black_192x192.png" width="50">--}}
{{--                        <h4 class="d-inline text-uppercase">Sort</h4>--}}
{{--                        <div class="dropdown-content box-shadow no-border">--}}
{{--                            <a class="d-block mt-2 text-uppercase" href="#"><img src="/images/sort-by-alphabet.png"> Asc</a>--}}
{{--                            <a class="d-block mt-2 text-uppercase" href="#"><img src="/images/sort-reverse-alphabetical-order.png"> Dsc--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

    <!-- filter -->
    <section id="category-body" class="mt-5 container">
        <div class="row">
            <section id="category-filter" class="col-md-4">
                <h3 class="text-uppercase sub-cat">Another breeds</h3>
                <div class="ml-5 sub-cat">
                    @if($categories)
                        @foreach($categories as $category)
                            @if(!$category->offer->isEmpty())
                                <h5><a href="{{ route('category.show',$category->id)}}">{{$category->breed}}</a></h5>
                            @endif
                        @endforeach
                    @endif
                </div>
{{--                <h3 class="mt-3 text-uppercase filter">Filters</h3>--}}
{{--                <div class="ml-5 filter">--}}
{{--                    <label class="container ml-0 "><input type="checkbox" id="something" name="name" value="something"> something--}}
{{--                    </label>--}}
{{--                    <label class="container ml-0 "><input type="checkbox" id="something" name="name" value="something"> something--}}
{{--                    </label>--}}
{{--                    <label class="container ml-0 "><input type="checkbox" id="something" name="name" value="something"> something--}}
{{--                    </label>--}}
{{--                    <label class="container ml-0 "><input type="checkbox" id="something" name="name" value="something"> something--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <h3 class="mt-3 text-uppercase">Date</h3>--}}
{{--                <div class="mt-3 ml-3">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-2">--}}
{{--                            <label for="from">From</label></div>--}}
{{--                        <div class="col-lg-1"></div>--}}
{{--                        <div id="FROM-date" class="col-lg-8 p-1 box-shadow">--}}
{{--                            <img class="date-img" src="/images/calendar-with-a-clock-time-tools.png" alt="">--}}
{{--                            <input name="date" class="border-0" type="date" value="2019-01-04">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <div class="row mb-5">--}}
{{--                        <div class="col-lg-2">--}}
{{--                            <label for="from">To</label></div>--}}
{{--                        <div class="col-lg-1"></div>--}}
{{--                        <div id="TO-date" class="col-lg-8 p-1 box-shadow">--}}
{{--                            <img class="date-img" src="/images/calendar-with-a-clock-time-tools.png" alt="">--}}
{{--                            <input name="date" class="border-0" type="date" value="2019-01-07">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </section>

            <!-- dog card -->
            <section id="category-items" class="col-md-8" id="item-box">
                @if($puppies->count()<=0)
                    <div class="row mb-3"><h2>We don't have any puppies with that kind of breed :(</h2></div>
                @endif
                <div class="row mb-3">

                    @foreach($puppies as $puppy)
                    <div class="col-md-4 col-sm-12 catalog-card mb-sm-5">

                        <a href="{{route('show.offer', $puppy->id)}}">
                            <div class="card no-border">
                                @if($puppy->photo)
                                <img class="card-img-top" src="/{{$puppy->photo->path}}" alt="Card image cap">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{$puppy->title}}</h5>
                                    <p class="card-text">{{$puppy->name}}</p>
                                    <img src="/images/like.png" class="like float-right invisible" alt="">
                                </div>
                            </div>
                        </a>
                        @auth
                            <form class="p-0 like-form puppy-like">
                                <input onclick="clickFav(this)" id="{{$puppy->id}}" class="like border-0 {{$puppy->wishlist ? 'liked' : 'like'}}" type="button">
                            </form>
                        @endauth
                    </div>
                    @endforeach

                </div>



                <!-- page next prev -->

                    {{$puppies->render()}}
            </section>
        </div>
    </section>
</section>

@endsection
