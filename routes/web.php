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

Route::get('/', function () {
   return view('auth.login');});
// Route::get('/portal', function () {
//     return view('content');
// });
//Route::get('/', 'Web\ContentController@welcome')->name('welcome');
//Route::get('/', 'Web\ContentController@welcome')->name('welcome');
//Route::get('/portal', 'Web\ContentController@blog1');
//Route::get('/articulo/{slug}', 'Web\ContentController@post')->name('post');
//Route::get('/subcategory/{slug}', 'Web\ContentController@subcategory')->name('subcategory');
Auth::routes();
//ROUTES ADMIN
Route::get('/dashboard/blogs', 'Admin\PageController@blog')->name('blog');
Route::get('/post/{slug}', 'Admin\PageController@post')->name('post');
Route::get('/subcategory/{slug}', 'Admin\PageController@subcategory')->name('subcategory');
//Route::get('/tag/{slug}', 'Admin\PageController@tag')->name('tag');

//ROUTES ADMIN
//Route::resource('tags', 		'Admin\TagController');
Route::resource('categories', 	'Admin\CategoryController');
Route::resource('subcategories', 	'Admin\SubcategoryController');
Route::resource('posts', 		'Admin\PostController');
//Route::get('/subcategory/{id}', 'Web\PageController@getSubcategory')->name('apiCategory');

//Rutas de la parte del perfil
Route::group(["middleware" => ['auth'], "as" => "profile."], function(){
   Route::get('profile', 'Admin\ProfileController@index')->name('index');
   Route::put('profile/{user}/update', 'Admin\ProfileController@update')->name('put');
   Route::put('profile/change_password', 'Admin\ProfileController@change_password')->name('change_password');
   Route::get('profile/posts', 'Admin\ProfileController@get_posts')->name('posts');
});

Route::group(["middleware" => ['auth'], "as" => "admin."], function(){
   Route::get('admin/users', 'Admin\AdminController@index')->name('index');
});