<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/posts');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/register', function () {
    return view('auth.register');
});

Route::resource('users', 'UsersController');
Route::resource('posts', 'PostsController');

// USER AUTHENTICATION
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// USER REGISTRATION
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::get('/user-profile/{userNumber}', function ($userNumber) {
//     $data = ['userNumber' => $userNumber];
//     return view('users.user-profile', $data);
// });

// Route::get('/create-post', function () {
//     return view('posts.create-post');
// });

// Route::get('/', 'PostsController@index');

// Route::get('/post/{postNumber}', function ($postNumber) {
//     $data = ['postNumber' => $postNumber];
//     return view('posts.view-post', $data);
// });

// Route::get('/user-posts/{userNumber}', function ($userNumber) {
//     $data = ['userNumber' => $userNumber];
//     return view('users.user-posts', $data);
// });


