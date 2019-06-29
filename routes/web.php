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

Route::get('/','WebController@Home')->name('index');

Route::get('/blog','WebController@Blog')->name('blog');

Route::get('/login','WebController@Login')->name('login');

Route::get('/jobdetail/{id}','WebController@Jobdetail')->name('jobdetail');



//admin route
Route::get('/admin','WebadminController@Dashboard')->name('webadmin.index');

Route::get('/admin/addjob','WebadminController@Postjob')->name('webadmin.job');

Route::post('/admin/Job/post','WebadminController@Savejob')->name('webadmin.savejob');