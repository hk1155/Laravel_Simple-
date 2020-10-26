<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {

    return view('admin.adminlogin');
});

Route::get('/test', function () {

    return view('test');
});

Route::get('/add', function () {

    return view('add');
});

Route::get('/display', 'Mycontroller@display');
Route::get('/deleteprod/{id}', 'Mycontroller@deleteprod');
Route::get('/editprod/{id}', 'Mycontroller@editprod');
Route::post('/editprod', 'Mycontroller@updateprod');
Route::post('/addproduct', 'Mycontroller@addproduct');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
