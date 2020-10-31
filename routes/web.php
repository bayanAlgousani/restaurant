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

// Route to index page:

	Route::get('/', 'PagesController@index')->name('index');

// Route to about page:

	Route::get('/about', 'PagesController@about')->name('about');

// Route to blog-details page:

	Route::get('/blog-details', 'PagesController@blog_details')->name('blog-details');


// Route to blog page:

	Route::get('/blog', 'PagesController@blog')->name('blog');


// Route to contact page:

	Route::get('/contact', 'PagesController@contact')->name('contact');


// Route to gallery page:

	Route::get('/gallery', 'PagesController@gallery')->name('gallery');


// Route to menu page:

	Route::get('/menu', 'PagesController@menu')->name('menu');

// Route to reservation page:

	Route::get('/reservation', 'PagesController@reservation')->name('reservation');


// Route to stuff page:

	Route::get('/stuff', 'PagesController@stuff')->name('stuff');