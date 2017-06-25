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

Route::get('/1', function () {
    return view('test1');
});

Route::get('/2', function () {
    return view('test2');
});

Route::get('/3', function () {
    return view('test3');
});

Route::get('/4', function () {
    return view('test4');
});

Route::get('/5', function () {
    return view('test5');
});

Route::get('/laout', function () {
    return view('site.laout');
});

Route::get('/sest10', function () {
    return view('site.sest10');
});

Route::get('/img', function () {
  return view('site.img');
});
