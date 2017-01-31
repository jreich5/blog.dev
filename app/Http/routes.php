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
    return redirect('posts.home');
});

// Route::get('/home', function () {
//     return view('posts.home');
// });

Route::get('/home', 'PageController@getHomePage');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/post/{postNumber}', function ($postNumber) {
    $data = ['postNumber' => $postNumber];
    return view('post.view-post', $data);
});

Route::get('/user-profile/{userNumber}', function ($userNumber) {
    $data = ['userNumber' => $userNumber];
    return view('users.user-profile', $data);
});

Route::get('/user-posts/{userNumber}', function ($userNumber) {
    $data = ['userNumber' => $userNumber];
    return view('users.user-posts', $data);
});

Route::get('/create-post', function () {
    return view('posts.create-post');
});

