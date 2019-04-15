<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="categoryPage.css">
    <title>categoryPage</title>
</head>

<body>
    <div id="navbar" class="jumbotron bg-black no-rounding p-2">
        <h1 class="text-center">navbar</h1>
    </div>
    <div id="main" class="container">
        <h1 class="mt-5">CATEGORY NAME</h1>
        <div class="d-flex justify-content-end">
            <label for="itemsPerPage" class="d-inline mr-4 pt-2">ITEMS PER PAGE</label>
            <select name="itemsPerPage" class="d-inline mr-4" id="">
                <option value="18">18</option>
                <option value="36">36</option>
                <option value="54">54</option>
            </select>
            <div class="dropdown p-2 shadow-without-top">
                <img class="sort-img" src="https://www.materialui.co/materialIcons/content/sort_black_192x192.png"
                    alt="Cinque Terre" width="50" height="50">
                <h4 class="d-inline">Sort</h4>
                <div class="dropdown-content shadow-without-top">
                    <a class="d-block mt-2" href="#"><img src="../../../design/assets/sort-by-alphabet.png"
                            alt="Cinque Terre" width="50" height="50"></a>
                    <a class="d-block mt-2" href="#"><img
                            src="../../../design/assets/sort-reverse-alphabetical-order.png" alt="Cinque Terre"
                            width="50" height="50">
                    </a>
                </div>
            </div>
        </div>

        <div class="d-flex mt-5">
            <div class="p-2 border-0" id="side">
                <h3>SUBCATEGORY</h3>
                <div class="ml-3">
                    <h5>Subcategory 1</h5>
                    <h5>Subcategory 2</h5>
                    <h5>Subcategory 3</h5>
                    <h5>Subcategory 1</h5>
                    <h5>Subcategory 2</h5>
                    <h5>Subcategory 3</h5>
                </div>
                <h3 class="mt-3">FILTERS</h3>
                <div class="ml-3">
                    <div id="checkbox">
                        <label class="container ml-0 ">something
                            <input type="checkbox" id="something" name="name" value="something">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div id="checkbox">
                        <label class="container ml-0 ">something
                            <input type="checkbox" id="something" name="name" value="something">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div id="checkbox">
                        <label class="container ml-0 ">something
                            <input type="checkbox" id="something" name="name" value="something">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div id="checkbox">
                        <label class="container ml-0 ">something
                            <input type="checkbox" id="something" name="name" value="something">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <h3 class="mt-3">DATE</h3>
                <div class="mt-3 ml-1">
                    <table>
                        <tr>
                            <td class="p-2"><label for="from">From</label></td>
                            <td>
                                <div class="d-inline p-2 shadow-without-top">
                                    <img class="date-img"
                                        src="../../../design/assets/calendar-with-a-clock-time-tools.png" alt="">
                                    <input name="date" class="border-0" type="date" value="2019-01-04">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2"><label for="from">To</label></td>
                            <td>
                                <div class="d-inline p-2 shadow-without-top">
                                    <img class="date-img"
                                        src="../../../design/assets/calendar-with-a-clock-time-tools.png" alt="">
                                    <input name="date" class="border-0" type="date" value="2019-01-07">
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="p-2 border-0 align-self-stretch" id="item-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-2.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-3.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-4.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-5.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-6.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-7.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-8.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-9.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-10.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-11.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-12.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-10.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-11.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-12.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-10.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-11.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="../../../design/assets/225-12.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Card header</a></h5>
                                <p class="card-text">Card Subheader</p>
                                <img src="../../../design/assets/like.png" class="like float-right" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="d-flex justify-content-center mt-3">
                    <ul class="pagination ">
                        <li class="page-item mr-3">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                        <li class="page-item active"><a class="page-link" href="#">10</a></li>
                        <li class="page-item"><a class="page-link" href="#">11</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">18</a></li>
                        <li class="page-item"><a class="page-link" href="#">19</a></li>
                        <li class="page-item"><a class="page-link" href="#">20</a></li>
                        <li class="page-item ml-3">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <br>
    <div class="jumbotron bg-black no-rounding mt-5">
        <h1 class="display-5 font-weight-bold text-center">FOOTER</h1>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>