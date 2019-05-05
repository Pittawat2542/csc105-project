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

Route::get('/', 'HomeController@index');

Route::get('/static/puppiesPage', 'StaticRoutesController@puppies');

Route::get("/static/register", 'StaticRoutesController@register');

Route::get("/static/login", 'StaticRoutesController@login');

Route::get("/static/password_reset", 'StaticRoutesController@password_reset');

Route::get("/static/dashboard/", 'UserController@index');

Route::get("/static/dashboard/admin", 'StaticRoutesController@dashboard_admin');

Route::get('/static/categoryPage/{id}', 'CategoriesController@show')->name('category.show');

Route::get('autocomplete/', 'HomeController@autocomplete');

//Route::get('/', function () {
//    return view('welcome');
//});
//
Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//categories page
Route::resource('/categories', 'CategoriesController', ['names'=>[
    'index'=>'categories.index',
    'show'=>'categories.show'
]]);

//Offers for not logedin
Route::get('/offers', 'OffersController@index')->name('offers');

//loged users
Route::group(['middleware'=>'auth'], function() {
    Route::get('/static/puppiesPage/{id}', 'OffersController@show')->name('show.offer');

    Route::get('/static/announcement/create', 'OffersController@create')->name('create.offer');
    Route::get('/static/announcement/{id}/edit', 'OffersController@edit')->name('edit.offer');
    Route::post('/static/announcement/store', 'OffersController@store')->name('store.offer');
    Route::patch('/static/announcement/{id}/update', 'OffersController@update')->name('update.offer');
    Route::delete('/static/announcement/{id}/destroy', 'OffersController@destroy')->name('destroy.offer');
    Route::get('/static/announcement/addpictures/{id}', 'OffersController@addpictures')->name('create.offer.pictures');
    Route::post('/static/announcement/addpictures/', 'OffersController@storePictures');



    Route::get('/static/dashboard/', 'UserController@index');
    Route::patch('/static/dashboard/{id}', 'UserController@update');
    Route::post('/static/dashboard/', 'UserController@updateId');

});

Route::group(['middleware'=>'admin'], function() {

    //index page of admin page
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::patch('/admin/approve/{id}', 'AdminController@approve')->name('approve');

    //users admin page
    Route::resource('admin/users', 'AdminUsersController', ['names'=>[
        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',
        'destroy'=>'admin.users.destroy'
    ]]);
    //categories admin page
    Route::resource('admin/categories', 'AdminCategoriesController', ['names'=>[
        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit',
        'delete'=>'admin.categories.delete'
    ]]);

    //pictures manager
    Route::resource('admin/media', 'AdminPhotoController', ['names'=>[
        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit',
    ]]);
    Route::delete('admin/delete/media', 'AdminPhotoController@deleteMedia');

    //offers for admin
    Route::resource('admin/offers', 'AdminOffersController', ['names'=>[
        'index'=>'admin.offer.index',
        'create'=>'admin.offer.create',
        'store'=>'admin.offer.store',
        'edit'=>'admin.offer.edit',
        'delete'=>'admin.offer.delete'
    ]]);
});
