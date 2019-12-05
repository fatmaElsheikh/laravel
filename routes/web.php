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
/*Route::get('/about' , function(){
    return view('pages/about');
});

Route::get('/contact' , function(){
    return view('/pages.contact');
});
Route::get('/login' , function(){
    return view('pages/login');
});*/
Route::get('/login/{user}/{pass}' , function($user , $pass){
    return 'Welcome '.$user.' Your password is '.$pass;  
});
Route::get('/about','pageController@about');
Route::get('/contact' ,'pageController@contact');
Route::get('/login','pageController@login');
