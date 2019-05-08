@extends('layouts.app')

@section('content')
    @if($puppy)
        <section id="puppy" class="container mt-5 mb-5">
            <h5 class="scrolling-wrapper">
                <span class="opacity50"><a id="category-link" href="/category/{{$puppy->category->id}}">{{$puppy->category->breed}}</a> / </span>
                <span class="text-primary text-uppercase font-weight-bold">{{$puppy->title}}</span>
            </h5>

            <!-- img slider -->
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            @foreach( $photos as $photo )
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="../{{$photo->path}}" class="d-block w-100" alt="{{$puppy->title}}">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-lg-5">
                    <div id="puppy-info" class="container d-flex flex-column align-items-end">
                        <div class="row">
                            <h1 class="text-primary text-uppercase">{{$puppy->name}}</h1>
                            @auth
                                <form id="puppy-like" class="ml-3">
                                    <input onclick="clickFav(this)" id="{{$puppy->id}}" class="like border-0 {{$puppy->wishlist ? 'liked' : 'like'}}" type="button">
                                </form>
                            @endauth
                        </div>
                        <div class="row mb-3">
                            <h5>
                                <img class="mr-3 user-image rounded-circle"
                                     src="{{$puppy->user->photo ? $puppy->user->photo->path : ''}}" alt="">
                                <p>Announced by {{ucwords($puppy->user->name)}}</p>
                                @if($puppy->user->isVerified())
                                    <p class="verified text-success">This user is verified</p>
                                @endif
                            </h5>
                        </div>
                        <div class="row">
                            <h6 class="basic-info">Age: {{$puppy->age}}</h6>
                        </div>
                        <div class="row">
                            <h6 class="basic-info">Location: {{$puppy->location}}</h6>
                        </div>
                        <div class="row my-3" style="width: 100%;border-bottom:1px solid #405377;">
                        </div>

                        <!-- contract info -->
                        <div class="container-fluid">
                            <div id="row-line-fb" class="row">
                                <div class="col-md-6 text-center" id="line">
                                    <a href="https://line.me/ti/p/{{$puppy->line}}"
                                       class="btn btn-primary social-button no-border-radius" target="blank">
                                        <h4><img class="mr-1" src="/images/line.png" alt=""> LINE
                                        </h4>
                                    </a>
                                </div>
                                <div class="col-md-6 text-center" id="fb">
                                    <a href="https://www.facebook.com/{{$puppy->facebook}}"
                                       class="btn btn-primary social-button no-border-radius"
                                       target="blank">
                                        <h4><img class="mr-1" src="/images/facebook-logo.png"
                                                 alt="">Facebook</h4>
                                    </a>
                                </div>
                            </div>
                            <div id="row-mail-call" class="row mt-3">
                                <div class="col-md-6 text-center" id="mail">
                                    <a href="mailto:{{$puppy->user->email}}"
                                       class="btn btn-primary social-button no-border-radius"
                                       target="blank">
                                        <h4><img class="mr-1" src="/images/close-envelope.png"
                                                 alt=""> Mail</h4>
                                    </a>
                                </div>
                                <div class="col-md-6 text-center" id="call">
                                    <a href="tel:{{$puppy->phone}}"
                                       class="btn btn-primary social-button no-border-radius" target="blank">
                                        <h4><img class="mr-1" src="/images/phone-receiver.png"
                                                 alt="">Call</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- description -->
            <hr class="my-3">
            <div id="description" class="container">
                <h2 class="text-uppercase text-primary">Description</h2>
                <div class="mt-3 ml-3">
                    <p>{{$puppy->description}}</p>
                    @if($puppy->category->pdf!=null)
                        <h6 class="text-primary mt-5 d-inline">More information about this breed: </h6>
                        <a id="more-info-link" href="{{$puppy->category->pdf}}">Click here!</a>
{{--                        <embed class="embed-info" src="{{$puppy->category->pdf}}" width="800" height="800" alt="pdf"--}}
{{--                               pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">--}}
                    @endif
                </div>
            </div>
        </section>
    @endif
@endsection
