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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => ['isLogin','adminAuth']], function () {

    Route::get('admin/contact','ContactController@index1');
    Route::get('admin/contact/{id}','ContactController@destroy');
    
    Route::resource('admin/slider', 'SliderController');
    Route::resource('admin/event', 'EventController');
    Route::resource('admin/news', 'NewsController');
    Route::resource('admin', 'AdminController');
});

// ============================================================

//Pages

// Route::get('loginAdmin', function () {
//     return view('admin.login');
// });

Route::get('loginAdmin','LoginAdminController@index');
Route::post('loginAdmin','LoginAdminController@login');
Route::get('/logout', 'LoginAdminController@logout');
// Route::get('index', function () {
//     return view('pages.index');
// });


Route::get('/', 'ShowPublicController@index');
Route::get('index', 'ShowPublicController@index');



Route::get('eventDetails/{id}', 'ShowPublicController@Event');
Route::get('newsDetails/{id}', 'ShowPublicController@News');




Route::get('404', function () {
    return view('pages.404');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('case-details', function () {
    return view('pages.case-details');
});

// Route::get('contact', function () {
//     return view('pages.contact');
// });

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::get('eventDetails', function () {
    return view('pages.eventDetails');
});
