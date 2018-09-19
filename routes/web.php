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
    return view('auth.signin');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/adduser',function(){
    return view('pages.adduser');
});

Route::get('/lockscreen',function(){
    return view('auth.lockscreen');
});

Route::get('/addproduct',function(){
    return view('pages.addproduct');
});

route::get('/listproduct',function(){
    return view('pages.listproduct');
});
