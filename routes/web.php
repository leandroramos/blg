<?php


// User Routes
Route::group(['namespace' => 'User'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('post/{post}', 'PostController@post')->name('post');

    Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
    Route::get('post/category/{category}', 'HomeController@category')->name('category');
});


// Admin Routes
Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin/home', 'HomeController@index')->name('admin.home');
    
    // Post Routes
    Route::resource('admin/post', 'PostController');

    // Users Routes
    Route::resource('admin/user', 'UserController');

    // Tag Routes
    Route::resource('admin/tag', 'TagController');

    // Category Routes
    Route::resource('admin/category', 'CategoryController');
});

// Route::get('admin/home', function() {
//     return view('admin.home');
// })->name('post');
