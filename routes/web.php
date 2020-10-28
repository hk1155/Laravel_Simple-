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
    return view('mylogin');
});

Route::get('/admin', function () {

    return view('admin.adminlogin');
});

Route::get('/test', function () {

    return view('test');
});
    Route::get('/display', 'Mycontroller@display');
    Route::get('/deleteprod/{id}', 'Mycontroller@deleteprod');
    Route::get('/editprod/{id}', 'Mycontroller@editprod');
    Route::post('/updateprod', 'Mycontroller@updateprod');
    Route::post('/addproduct', 'Mycontroller@addproduct');
    Route::view('/addemp', 'add_emp');
    Route::view('/mylogin', 'mylogin')->name("login");
    Route::view('/add','add')->name("add");
    Route::post('/submitemp', 'Mycontroller@submitemp');
    Route::post('/mlogin', 'Mycontroller@mlogin');
    Route::get('/logout','Mycontroller@logout');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
