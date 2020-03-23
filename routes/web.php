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
use Bbs\Input;
use Bbs\Login;
use Bbs\Display;
use Bbs\Delete;


Route::get('/', function () {
    return view('welcome');
});


//Route::get('/input', function () {
//    $input = new input();
//    $input->input_page();
//});

Route::get('/input', 'BbsController@input');

Route::post('/save', 'BbsController@save');

Route::get('/list', 'BbsController@list');

Route::post('/list', 'BbsController@list');

Route::get('/contents', 'BbsController@contents');

Route::post('/delete', 'BbsController@delete');

Route::get('/login_page', 'BbsController@login_page');

Route::post('/login', 'BbsController@login');

Route::get('/logout', 'BbsController@logout');