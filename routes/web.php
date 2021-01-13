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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/portal', function () {
    return view('content');
});

Route::get('/', 'Web\PageController@welcome')->name('welcome');

Auth::routes();
//ROUTES ADMIN
Route::get('/dashboard/blogs', 'Web\PageController@blog')->name('blog');
Route::get('/post/{slug}', 'Web\PageController@post')->name('post');
Route::get('/subcategory/{slug}', 'Web\PageController@subcategory')->name('subcategory');
Route::get('/tag/{slug}', 'Web\PageController@tag')->name('tag');

//ROUTES ADMIN
//Route::resource('tags', 		'Admin\TagController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('subcategories', 	'Admin\SubcategoryController');
Route::resource('posts', 		'Admin\PostController');
//Route::get('/subcategory/{id}', 'Web\PageController@getSubcategory')->name('apiCategory');