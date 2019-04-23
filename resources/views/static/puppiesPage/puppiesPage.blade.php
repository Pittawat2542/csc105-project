<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
    <link href="{{asset('css/puppiesPage.css')}}" rel="stylesheet">
    <title>puppiesPage</title>
</head>

<body>
    @include('navbar.navbar')
    <div class="container mt-5 mb-5" id="main">
        <h3><span class="opacity50"> Category / Subcategory / Sub of Subcategory /</span> Product Name</h3>
        <div class="row mt-5">
            <div class="slider-container col-md-5">
            <div class="slider-container col-lg-5">
                <div id="puppy-slider" class="carousel slide" data-ride="carousel">


                    <ul class="carousel-indicators">
                        <li data-target="#puppy-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#puppy-slider" data-slide-to="1"></li>
                        <li data-target="#puppy-slider" data-slide-to="2"></li>
                        <li data-target="#puppy-slider" data-slide-to="3"></li>
                        <li data-target="#puppy-slider" data-slide-to="4"></li>
                        <li data-target="#puppy-slider" data-slide-to="5"></li>
                    </ul>


                    <div class="carousel-inner height100">
                        <div class="carousel-item active height100">
                            <img class="img-fluid height100" src="/images/225-2.jpeg" >
                        </div>
                        <div class="carousel-item height100">
                            <img class="img-fluid height100" src="/images/225-3.jpeg" >
                        </div>
                        <div class="carousel-item height100">
                            <img class="img-fluid height100" src="/images/225-4.jpeg" >
                        </div>
                        <div class="carousel-item height100">
                            <img class="img-fluid height100" src="/images/225-5.jpeg" >
                        </div>
                        <div class="carousel-item height100">
                            <img class="img-fluid height100" src="/images/225-6.jpeg" >
                        </div>
                        <div class="carousel-item height100">
                            <img class="img-fluid height100" src="/images/225-7.jpeg" >
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#puppy-slider" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#puppy-slider" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="d-flex flex-column">
                    <div class="float-right">
                        <img src="/images/like.png" class="like float-right" alt="">
                        <h1 class="d-inline product-name float-right">PRODUCT NAME</h1>
                    </div>

                    <div class="mt-3">
                        <h4 class="float-right" id="seller-name"><img id="user-img" class="circle-border mr-5"
                                src="/images/31.jpg" alt="">Abcd Gef</h4>
                    </div>
                    <div class="mt-3">
                        <h5 class="float-right basic-info">Basic info: some basic info</h5>
                    </div>
                    <div class="mt-3">
                        <h5 class="float-right basic-info">Basic info: some basic info</h5>
                    </div>
                    <div class="mt-3">
                        <h5 class="float-right basic-info">Basic info: some basic info</h5>
                    </div>
                    <div class="mt-3">
                        <h5 class="float-right basic-info">Basic info: some basic info</h5>
                    </div>
                    <div class="row">
                        <div class="col p-0">
                            <hr>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-5 text-center" id="line">
                            <a href="https://line.me/th/" target="blank">
                                <h4 class="mt-2"><img id="line-img" src="/images/line.png" alt=""> Line
                                </h4>
                            </a>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5 text-center " id="fb">
                            <a href="https://www.facebook.com/" target="blank">
                                <h4 class="m-3"><img id="fb-img" src="/images/facebook-logo.png"
                                        alt="">Facebook</h4>
                            </a>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-5 text-center p-2" id="mail">
                            <a href="mailto:someone@example.com" target="blank">
                                <h4 class="mt-2"><img id="mail-img" src="/images/close-envelope.png"
                                        alt=""> Mail</h4>
                            </a>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5 text-center " id="call">
                            <a href="tel:+66123456789" target="blank">
                                <h4 class="m-3"><img id="call-img" src="/images/phone-receiver.png"
                                        alt="">Call</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h1 id="description" class="mt-5">DESCRIPTION</h1>
        <h3 class="display-5" id="info">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum laoreet nisi nec condimentum.
                In
                pellentesque sem et sapien egestas sodales. Donec vel tempus eros, eget aliquam ipsum. Quisque commodo,
                ex
                in placerat placerat, massa neque fermentum enim, fringilla mollis nibh justo a mauris. Integer nec
                lacus
                augue. Donec porta urna est. Phasellus malesuada justo quis turpis venenatis, euismod aliquet tellus
                tristique. Sed in leo dui. Praesent volutpat eget dolor eu gravida. Praesent eu rhoncus nibh. Vivamus
                tristique est dui, nec sagittis neque placerat in. Quisque arcu ex, laoreet sit amet libero sed,
                faucibus
                mollis velit. Morbi eu ligula porta, tincidunt purus non, dapibus odio.</p>
            <p>In hac habitasse platea
                dictumst.
                Phasellus tempor consequat orci iaculis imperdiet. Morbi elementum leo at urna aliquet malesuada. Duis
                varius dui tortor, eget auctor ex viverra ac. Ut dictum accumsan dictum. In eu sem suscipit tellus
                blandit
                imperdiet ut in odio. Cras vel magna euismod, dignissim magna at, rhoncus mi. Morbi nisi purus,
                efficitur
                sit amet nunc eget, suscipit volutpat urna. Nunc mollis luctus risus, ac consequat nulla consequat sed.
                Maecenas in velit quis elit eleifend fringilla vitae eu lectus. Suspendisse lectus est, facilisis eu
                ultrices et, ullamcorper eu mauris. Aliquam suscipit imperdiet neque, in mollis quam rutrum eget.</p>
            <p>Sed
                pellentesque ante a justo placerat auctor. Phasellus consectetur turpis in accumsan vulputate. Curabitur
                elementum felis est, vitae fringilla est luctus at. Phasellus vitae libero diam. Nunc eleifend augue non
                dolor feugiat suscipit. Maecenas consequat ipsum lacinia, fermentum mauris nec, pharetra lacus. Aliquam
                ut
                sagittis enim, consequat consectetur risus. Sed augue elit, maximus nec placerat ac, sagittis ac magna.
                Praesent semper nulla eu faucibus porta.</p>
            <p> Suspendisse potenti. Vivamus vel dignissim leo. Curabitur a aliquet
                tortor. Praesent ac varius erat. In at venenatis ex. Maecenas sit amet facilisis nunc. Proin ullamcorper
                et
                quam vel ultrices. Sed euismod arcu eleifend, bibendum lorem vel, placerat lacus. Quisque leo risus,
                cursus
                eu mollis id, pharetra sit amet sapien. Nulla facilisi. Sed rutrum porttitor lorem, quis pharetra felis
                lacinia nec.</p>
            <p> Mauris ut sem vel massa placerat rhoncus vitae at neque. Cras dapibus, sapien id ultricies
                lobortis, quam justo fermentum nisl, eget euismod est nisi quis est. Nulla id facilisis dui. In
                elementum
                orci laoreet diam facilisis, vel tempus nulla convallis. In eu ultrices enim. Aliquam sed nunc a mi
                luctus
                ullamcorper. Vivamus hendrerit urna sit amet metus euismod tristique. Praesent quis lectus ut dui mollis
                aliquet sit amet ac nisi. Phasellus finibus congue dapibus.</p>
        </h3>
    </div>

    @include('footer.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>