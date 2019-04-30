@extends('static.layouts.app')

@section('content')
    <section id="puppy" class="container mt-5 mb-5">
        <h5 class="scrolling-wrapper"><span class="opacity50"> Category / Subcategory / Sub of Subcategory /</span> <span
                    class="text-primary text-uppercase font-weight-bold">Product Name</span></h5>

        <div class="row mt-5">
            <div class="col-lg-6">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                        <li data-target="#carousel" data-slide-to="3"></li>
                        <li data-target="#carousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/images/225.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/225-2.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/225-3.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/225-4.jpeg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/images/225-5.jpeg" class="d-block w-100">
                        </div>
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
            <div  class="col-lg-5">
                <div id="puppy-info" class="container d-flex flex-column align-items-end">
                    <div class="row">
                        <h1 class="text-primary text-uppercase">Puppy Name</h1>
                        <form id="puppy-like" class="ml-3" style="position: relative;top: 10px;">
                            <input onclick="clickFav(this)" class="like border-0 " type="button">
                        </form>
                    </div>
                    <div class="row mb-3">
                        <h5>
                            <img class="mr-3 user-image rounded-circle" src="/images/31.jpg" alt="">Abcd Gef</h5>
                    </div>
                    <div class="row">
                        <h6 class="basic-info">Basic info: some basic info</h6>
                    </div>
                    <div class="row">
                        <h6 class="basic-info">Basic info: some basic info</h6>
                    </div>
                    <div class="row">
                        <h6 class="basic-info">Basic info: some basic info</h6>
                    </div>
                    <div class="row">
                        <h6 class="basic-info">Basic info: some basic info</h6>
                    </div>
                    <div class="row">
                        <h6 class="basic-info">Basic info: some basic info</h6>
                    </div>
                    <div class="row my-3" style="width: 100%;border-bottom:1px solid #405377;">
                    </div>
                    <div class="container-fluid">
                        <div id="row-line-fb" class="row">
                            <div class="col-md-6 text-center" id="line">
                                <a href="https://line.me/th/" class="btn btn-primary social-button no-border-radius" target="blank">
                                    <h4><img class="mr-1" src="/images/line.png" alt=""> LINE
                                    </h4>
                                </a>
                            </div>
                            <div class="col-md-6 text-center" id="fb">
                                <a href="https://www.facebook.com/" class="btn btn-primary social-button no-border-radius"
                                   target="blank">
                                    <h4><img class="mr-1" src="/images/facebook-logo.png"
                                             alt="">Facebook</h4>
                                </a>
                            </div>
                        </div>
                        <div id="row-mail-call" class="row mt-3">
                            <div class="col-md-6 text-center" id="mail">
                                <a href="mailto:info@puppieshub.com" class="btn btn-primary social-button no-border-radius"
                                   target="blank">
                                    <h4><img class="mr-1" src="/images/close-envelope.png"
                                             alt=""> Mail</h4>
                                </a>
                            </div>
                            <div class="col-md-6 text-center" id="call">
                                <a href="tel:+66123456789" class="btn btn-primary social-button no-border-radius" target="blank">
                                    <h4><img class="mr-1" src="/images/phone-receiver.png"
                                             alt="">Call</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-3">
        <div id="description" class="row">
            <h2 class="text-uppercase text-primary">Description</h2>
            <div class="mt-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum laoreet nisi nec
                    condimentum.
                    In
                    pellentesque sem et sapien egestas sodales. Donec vel tempus eros, eget aliquam ipsum. Quisque
                    commodo,
                    ex
                    in placerat placerat, massa neque fermentum enim, fringilla mollis nibh justo a mauris. Integer nec
                    lacus
                    augue. Donec porta urna est. Phasellus malesuada justo quis turpis venenatis, euismod aliquet tellus
                    tristique. Sed in leo dui. Praesent volutpat eget dolor eu gravida. Praesent eu rhoncus nibh.
                    Vivamus
                    tristique est dui, nec sagittis neque placerat in. Quisque arcu ex, laoreet sit amet libero sed,
                    faucibus
                    mollis velit. Morbi eu ligula porta, tincidunt purus non, dapibus odio.</p>
                <p>In hac habitasse platea
                    dictumst.
                    Phasellus tempor consequat orci iaculis imperdiet. Morbi elementum leo at urna aliquet malesuada.
                    Duis
                    varius dui tortor, eget auctor ex viverra ac. Ut dictum accumsan dictum. In eu sem suscipit tellus
                    blandit
                    imperdiet ut in odio. Cras vel magna euismod, dignissim magna at, rhoncus mi. Morbi nisi purus,
                    efficitur
                    sit amet nunc eget, suscipit volutpat urna. Nunc mollis luctus risus, ac consequat nulla consequat
                    sed.
                    Maecenas in velit quis elit eleifend fringilla vitae eu lectus. Suspendisse lectus est, facilisis eu
                    ultrices et, ullamcorper eu mauris. Aliquam suscipit imperdiet neque, in mollis quam rutrum
                    eget.</p>
                <p>Sed
                    pellentesque ante a justo placerat auctor. Phasellus consectetur turpis in accumsan vulputate.
                    Curabitur
                    elementum felis est, vitae fringilla est luctus at. Phasellus vitae libero diam. Nunc eleifend augue
                    non
                    dolor feugiat suscipit. Maecenas consequat ipsum lacinia, fermentum mauris nec, pharetra lacus.
                    Aliquam
                    ut
                    sagittis enim, consequat consectetur risus. Sed augue elit, maximus nec placerat ac, sagittis ac
                    magna.
                    Praesent semper nulla eu faucibus porta.</p>
                <p> Suspendisse potenti. Vivamus vel dignissim leo. Curabitur a aliquet
                    tortor. Praesent ac varius erat. In at venenatis ex. Maecenas sit amet facilisis nunc. Proin
                    ullamcorper
                    et
                    quam vel ultrices. Sed euismod arcu eleifend, bibendum lorem vel, placerat lacus. Quisque leo risus,
                    cursus
                    eu mollis id, pharetra sit amet sapien. Nulla facilisi. Sed rutrum porttitor lorem, quis pharetra
                    felis
                    lacinia nec.</p>
                <p> Mauris ut sem vel massa placerat rhoncus vitae at neque. Cras dapibus, sapien id ultricies
                    lobortis, quam justo fermentum nisl, eget euismod est nisi quis est. Nulla id facilisis dui. In
                    elementum
                    orci laoreet diam facilisis, vel tempus nulla convallis. In eu ultrices enim. Aliquam sed nunc a mi
                    luctus
                    ullamcorper. Vivamus hendrerit urna sit amet metus euismod tristique. Praesent quis lectus ut dui
                    mollis
                    aliquet sit amet ac nisi. Phasellus finibus congue dapibus.</p>
            </div>
        </div>
    </section>
@endsection