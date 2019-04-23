@extends('static.layouts.app')

@section('content')
    <section id="category" class="container mb-3">

        <section id="category-header" class="container mt-5">
            <div class="row">
                <div class="col-md-4"><h1>CATEGORY NAME</h1></div>
                <div class="col-md-8">
                    <div class="float-right">
                        <label for="itemsPerPage" class="d-inline mr-4 pt-2">ITEMS PER PAGE</label>
                        <select name="itemsPerPage" class="d-inline mr-4 box-shadow">
                            <option value="18">18</option>
                            <option value="36">36</option>
                            <option value="54">54</option>
                        </select>
                        <div class="dropdown p-2 box-shadow sorting">
                            <img
                                 src="https://www.materialui.co/materialIcons/content/sort_black_192x192.png"
                                 width="50">
                            <h4 class="d-inline text-uppercase">Sort</h4>
                            <div class="dropdown-content box-shadow no-border">
                                <a class="d-block mt-2 text-uppercase" href="#"><img src="/images/sort-by-alphabet.png"]> Asc</a>
                                <a class="d-block mt-2 text-uppercase" href="#"><img
                                            src="/images/sort-reverse-alphabetical-order.png"> Dsc
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="category-body" class="mt-5 container">
            <div class="row">
                <section id="category-filter" class="col-md-4">
                    <h3 class="text-uppercase">Subcategory</h3>
                    <div class="ml-5">
                        <h5><a href="/static/categoryPage">Subcategory 1</a></h5>
                        <h5><a href="/static/categoryPage">Subcategory 2</a></h5>
                        <h5><a href="/static/categoryPage">Subcategory 3</a></h5>
                        <h5><a href="/static/categoryPage">Subcategory 1</a></h5>
                        <h5><a href="/static/categoryPage">Subcategory 2</a></h5>
                        <h5><a href="/static/categoryPage">Subcategory 3</a></h5>
                    </div>
                    <h3 class="mt-3 text-uppercase">Filters</h3>
                    <div class="ml-5">
                        <label class="container ml-0 "><input type="checkbox" id="something" name="name"
                                                              value="something"> something
                        </label>
                        <label class="container ml-0 "><input type="checkbox" id="something" name="name"
                                                              value="something"> something
                        </label>
                        <label class="container ml-0 "><input type="checkbox" id="something" name="name"
                                                              value="something"> something
                        </label>
                        <label class="container ml-0 "><input type="checkbox" id="something" name="name"
                                                              value="something"> something
                        </label>
                    </div>
                    <h3 class="mt-3 text-uppercase">Date</h3>
                    <div class="mt-3 ml-3">
                        <table>
                            <tr>
                                <td class="p-3"><label for="from">From</label></td>
                                <td>
                                    <div class="d-inline p-3 box-shadow">
                                        <img class="date-img"
                                             src="/images/calendar-with-a-clock-time-tools.png" alt="">
                                        <input name="date" class="border-0" type="date" value="2019-01-04">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3"><label for="from">To</label></td>
                                <td>
                                    <div class="d-inline p-3 box-shadow">
                                        <img class="date-img"
                                             src="/images/calendar-with-a-clock-time-tools.png" alt="">
                                        <input name="date" class="border-0" type="date" value="2019-01-07">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </section>
                <section id="category-items" class="col-md-8" id="item-box">
                    <div class="row mb-3">
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-2.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-3.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-4.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-5.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-6.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-7.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-8.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-9.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-10.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-11.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-12.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-10.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-11.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-12.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-10.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-11.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-1 catalog-card">
                            <a href="/static/puppiesPage">
                                <div class="card no-border">
                                    <img class="card-img-top" src="/images/225-12.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card header</h5>
                                        <p class="card-text">Card Subheader</p>
                                        <img src="/images/like.png" class="like float-right" alt="">
                                    </div>
                                </div>
                            </a>
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
                </section>
            </div>
        </section>
    </section>

@endsection