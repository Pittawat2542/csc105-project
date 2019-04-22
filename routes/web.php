<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function() {
    return view('static.index.index');
});

Route::get('/static/puppiesPage', function() {
    return view("static.puppiesPage.puppiesPage");
});

Route::get('/static/categoryPage', function() {
   return view('static.categoryPage.category');
});

Route::get("/static/register", function() {
    return view('static.auth.register');
});

Route::get("/static/login", function() {
    return view('static.auth.login');
});

Route::get("/static/password_reset", function() {
    return view('static.auth.password_reset');
});

Route::get("/static/dashboard/", function() {
    return view('static.dashboardPage.dashboard_user');
});

Route::get("/static/dashboard/admin", function() {
    return view('static.dashboardPage.dashboard_admin');
});

Route::get("/static/dashboard/", function() {
    return view('static.dashboardPage.dashboard_user');
});

Route::get('/static/announcement/create', function() {
    return view('static.dashboardPage.announcement');
});

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
////categories page
//Route::resource('/categories', 'CategoriesController', ['names'=>[
//    'index'=>'categories.index',
//    'show'=>'categories.show'
//]]);
//
////Offers for not logedin
//Route::get('/offers', 'OffersController@index')->name('offers');
//
////loged users
//Route::group(['middleware'=>'auth'], function() {
//
//    //Offers for users
//    Route::resource('admin/users', 'OffersController', ['names'=>[
//        'myOffers'=>'myOffers.create',
//        'create'=>'offers.create',
//        'store'=>'offer.store',
//        'edit'=>'offer.edit',
//        'delete'=>'offer.delete'
//    ]]);
//
//});
//
//Route::group(['middleware'=>'admin'], function() {
//
//    //index page of admin page
//    Route::get('/admin', 'AdminController@index')->name('admin');
//    //users admin page
//    Route::resource('admin/users', 'AdminUsersController', ['names'=>[
//        'index'=>'admin.users.index',
//        'create'=>'admin.users.create',
//        'store'=>'admin.users.store',
//        'edit'=>'admin.users.edit',
//        'delete'=>'admin.users.delete'
//    ]]);
//    //categories admin page
//    Route::resource('admin/categories', 'AdminCategoriesController', ['names'=>[
//        'index'=>'admin.categories.index',
//        'create'=>'admin.categories.create',
//        'store'=>'admin.categories.store',
//        'edit'=>'admin.categories.edit',
//        'delete'=>'admin.categories.delete'
//    ]]);
//
//    //pictures manager
//    Route::resource('admin/media', 'AdminPhotoController', ['names'=>[
//        'index'=>'admin.media.index',
//        'create'=>'admin.media.create',
//        'store'=>'admin.media.store',
//        'edit'=>'admin.media.edit',
//    ]]);
//    Route::delete('admin/delete/media', 'AdminPhotoController@deleteMedia');
//
//    //offers for admin
//    Route::resource('admin/offers', 'AdminOffersController', ['names'=>[
//        'index'=>'admin.offer.index',
//        'create'=>'admin.offer.create',
//        'store'=>'admin.offer.store',
//        'edit'=>'admin.offer.edit',
//        'delete'=>'admin.offer.delete'
//    ]]);
//});