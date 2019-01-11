<?php

Route::group(['namespace' => 'App'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/about', 'About@index')->name('home');
    Route::get('/service', 'Service@index')->name('home');
    Route::get('/portfolio', 'Portfolio@index')->name('home');
    Route::get('/pages', 'Pages@index')->name('home');
    Route::get('/blog', 'Blog@index')->name('home');
    Route::get('/contact', 'Contact@index')->name('home');
    // Route::get('/post/{flag}', 'HomeController@posts')->name('post');
    // Route::get('/tags/{flag}', 'HomeController@tags')->name('tags');
    // Route::get('/category/{flag}', 'HomeController@category')->name('category');
    // Route::get('/feed', 'HomeController@feed');
    // Route::get('/sitemap.xml', 'HomeController@siteMap');
    // Route::get('/xmlrpc', 'XmlRpcController@errorMessage');
    // Route::post('/xmlrpc', 'XmlRpcController@index')->name('xmlrpc');
    // Route::get('/friends', 'HomeController@friends')->name('friends');  
    // Route::resource('/comment', 'CommentController');
    // Route::get('/debug', 'HomeController@debug')->name('debug');
});