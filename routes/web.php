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

Route::get('/', 'StaticRoutesController@index');

Route::get('/static/puppiesPage', 'StaticRoutesController@puppies');

Route::get('/static/categoryPage', 'StaticRoutesController@category');

Route::get("/static/password_reset", 'StaticRoutesController@password_reset');

Route::get("/static/dashboard/", 'StaticRoutesController@dashboard');

Route::get("/static/dashboard/admin", 'StaticRoutesController@dashboard_admin');

Route::get('/static/announcement/create', 'StaticRoutesController@announcement_create');

Route::get('autocomplete', 'HomeController@autocomplete');

Auth::routes();

// Categories page
Route::resource('/categories', 'CategoriesController', ['names'=>[
    'index'=>'categories.index',
    'show'=>'categories.show'
]]);

// Offers for not logged in
Route::get('/offers', 'OffersController@index')->name('offers');

// Logged users
Route::group(['middleware'=>'auth'], function() {

    // Offers for users
    Route::resource('admin/users', 'OffersController', ['names'=>[
        'myOffers'=>'myOffers.create',
        'create'=>'offers.create',
        'store'=>'offer.store',
        'edit'=>'offer.edit',
        'delete'=>'offer.delete'
    ]]);

});

Route::group(['middleware'=>'admin'], function() {

    // Index page of admin page
    Route::get('/admin', 'AdminController@index')->name('admin');
    // Users admin page
    Route::resource('admin/users', 'AdminUsersController', ['names'=>[
        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',
        'delete'=>'admin.users.delete'
    ]]);
    // Categories admin page
    Route::resource('admin/categories', 'AdminCategoriesController', ['names'=>[
        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit',
        'delete'=>'admin.categories.delete'
    ]]);

    // Pictures manager
    Route::resource('admin/media', 'AdminPhotoController', ['names'=>[
        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit',
    ]]);
    Route::delete('admin/delete/media', 'AdminPhotoController@deleteMedia');

    // Offers for admin
    Route::resource('admin/offers', 'AdminOffersController', ['names'=>[
        'index'=>'admin.offer.index',
        'create'=>'admin.offer.create',
        'store'=>'admin.offer.store',
        'edit'=>'admin.offer.edit',
        'delete'=>'admin.offer.delete'
    ]]);
});
