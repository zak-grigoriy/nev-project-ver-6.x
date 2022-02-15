<?php

//------------------------------------------------------------------------------
Route::get ('/proba', 'MainController@proba')->name('proba');
Route::get('/messagepodrobno/{id}', 'MainController@messagepodrobno')->name('messagepodrobno');
Route::get('/messages/{id}', 'ContactController@allData')-> name('contact-data');
Route::get('/addform/{id}', 'ContactController@addForm')-> name('add-form');
Route::POST('/addcomment', 'ContactController@addCommentForm')-> name('addcomment-form');
// Route::get('/messages', 'ContactController@allData')-> name('contact-data');
//Route::get('/addcomment', 'ContactController@addComment')-> name('add-comment');
//Routt::post('/comment', 'ContactController@addForm')->('add-form');
//Рабочий вариант----------------------------------------------------------
//Route::get('/messages', 'ContactController@messages')-> name('messages');
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::get('/logout', 'Auth\loginController@logout')->name('get-logout');

Route::group([
    'middleware'=> 'auth',
    'namespace' => 'Admin',
    'prefix' => 'admin',
], function () {
    Route::group(['middleware' => 'is_admin'], function () {
    });

    Route::resource('products', 'ProductController');
   Route::resource('categories', 'CategoryController');

});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MainController@index')->name('index');

Route::get('/categories', 'MainController@categories')->name('categories');

Route::get('/{category}', 'MainController@category')->name('category');

Route::get('/{category}/{product?}', 'MainController@product')->name('product');

// Route::get('/messagepodrobno', 'MainController@messagepodrobno')->name('messagepodrobno');

// Route::get('/basket', 'MainController@basket')->name('basket');
//
// Route::get('/basket/place', 'MainController@basketPlace')->name('basket-place');



// Ниже лишние
// Route::get('/contacts/messages', 'MainController@messages')->name('messages');
//
// Route::get('/admin/categories/create', 'Admin\CategoryController@create')->name('categories.create');
