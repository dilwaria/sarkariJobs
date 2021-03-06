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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::any('/adminInterface',['uses'=>'adminController@adminInterface','as'=>'adminInterface']);

Route::post('/blog/saveBlog',['uses'=>'BlogController@saveBlog']);

Route::any('/',['uses'=>'homeController@homepage','as'=>'homepage']);

Route::any('/about-us',['uses'=>'homeController@aboutus','as'=>'aboutus']);

Route::any('/privacy',['uses'=>'homeController@privacy','as'=>'privacy']);
