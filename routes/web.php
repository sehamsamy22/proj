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
    return view('welcome');
});

Route::get('/posts','PagesController@posts' );
Route::get('/posts/{post}','PagesController@post' );
Route::post('/posts/store','PagesController@store' );
Route::post('/posts/{post}/store','CommentsController@store' );
Route::get('/category/{name}','PagesController@category' );


//Auth
Route::get('/register','RegisterationController@create' );
Route::post('/register','RegisterationController@store' );

//Auth
Route::get('/login','SessionController@create' );
Route::post('/login','SessionController@store' );

Route::get('/logout','SessionController@destory' );


// Route::get('/admin',[
//     'uses'=>'PagesController@admin',
//     'as'=>'content.admin',
//     'middleware'=>'roles',
//     'roles'=>['admin']
// ] );
