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
    return view('studentlogin');
});

Route::get('/test',function(){
	return view('admin.dashboard');
});

//routes for admin
Route::get('/login','AdminController@login');
Route::post('/admin/submit','AdminController@submit');
Route::get('/dashboard','AdminController@index');
Route::get('/addUniversity','AdminController@addUniverstiy');
Route::post('/admin/store','AdminController@store');
Route::get('/allUniversity','AdminController@allUniversity');
Route::get('/editUniversity/{id}','AdminController@editUniversity');
Route::get('/deleteUniversity/{id}','AdminController@deleteUniversity');
Route::post('/admin/update/{id}','AdminController@update');
Route::get('/adminlogout','AdminController@logout');
Route::get('/addNotice','AdminController@addNotice');
Route::post('/storeNotice','AdminController@storeNotice');
Route::get('/allNotice','AdminController@allNotice');
Route::get('/deleteNotice/{id}','AdminController@deleteNotice');


//Routes for user

Route::get('/userRegistration','UserController@registration');
Route::post('/user/submit','UserController@submit');
Route::post('/studentlogin','UserController@login');
Route::get('/studentPage','UserController@studentPage');
Route::get('/studentLogout','UserController@logout');
Route::get('/noticeBoard','UserController@noticeBoard');
Route::get('/fullNotice/{id}','UserController@fullNotice');