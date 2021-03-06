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

Route::get("/dashboard/", 'UserController@index');

Route::get('/autocomplete/', 'HomeController@autocomplete');

Route::get('/category/{id}', 'CategoriesController@show')->name('category.show');

Auth::routes();

Route::resource('/categories', 'CategoriesController', ['names'=>[
    'index'=>'categories.index',
    'show'=>'categories.show'
]]);

//Offers for not logedin
Route::get('/offers', 'OffersController@index')->name('offers');

//loged users
Route::group(['middleware'=>'auth'], function() {

    Route::get('/wishlist/{id}/store', 'WishlistController@store')->name('store.wishlist');

    Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);

    Route::get('/puppies/{id}', 'OffersController@show')->name('show.offer');

    Route::get('/announcement/create', 'OffersController@create')->name('create.offer');
    Route::get('/announcement/{id}/edit', 'OffersController@edit')->name('edit.offer');
    Route::post('/announcement/store', 'OffersController@store')->name('store.offer');
    Route::patch('/announcement/{id}/update', 'OffersController@update')->name('update.offer');
    Route::delete('/announcement/{id}/destroy', 'OffersController@destroy')->name('destroy.offer');
    Route::get('/announcement/addpictures/{id}', 'OffersController@addpictures')->name('create.offer.pictures');
    Route::post('/announcement/addpictures/', 'OffersController@storePictures');

    Route::get('/dashboard/', 'UserController@index');
    Route::patch('/dashboard/{id}', 'UserController@update');
    Route::post('/dashboard/', 'UserController@updateId');

});

Route::group(['middleware'=>'admin'], function() {

    //index page of admin page
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::patch('/admin/approve/{id}', 'AdminController@approve')->name('approve');

    //users admin page
    Route::resource('/admin/users', 'AdminUserController', ['names'=>[
        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',
        'update'=>'admin.users.update',
        'destroy'=>'admin.users.destroy'
    ]]);
    //categories admin page
    Route::resource('/admin/categories', 'AdminCategoriesController', ['names'=>[
        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'store'=>'admin.categories.store',
        'edit'=>'admin.categories.edit',
        'delete'=>'admin.categories.delete'
    ]]);

    //pictures manager
    Route::resource('/admin/media', 'AdminPhotoController', ['names'=>[
        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
        'store'=>'admin.media.store',
        'edit'=>'admin.media.edit',
    ]]);
    Route::delete('/admin/delete/media', 'AdminPhotoController@deleteMedia');

    //offers for admin
    Route::resource('/admin/offers', 'AdminOffersController', ['names'=>[
        'index'=>'admin.offer.index',
        'create'=>'admin.offer.create',
        'store'=>'admin.offer.store',
        'edit'=>'admin.offer.edit',
        'delete'=>'admin.offer.delete'
    ]]);
});
