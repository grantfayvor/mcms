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

//app views
Route::get('/', 'MainController@index')->name('dashboard');
Route::get('/login', function(){ return view('login'); })->name('login');
Route::get('/register', function(){ return view('register'); })->name('register');
Route::get('/create', 'MainController@createDocument')->name('create');
Route::get('/upload', 'MainController@uploadDocument')->name('upload');
Route::get('/activity', 'MainController@userActivities')->name('activity');
Route::get('/mydocuments', 'MainController@userDocuments')->name('documents');


/*app apis*/

//user apis
Route::post('/api/user/register', 'UserController@register')->name('user-register');
Route::post('/api/user/authenticate', 'UserController@login')->name('authenticate');
Route::get('/logout', 'UserController@logout');
Route::get('/api/user', 'UserController@getActiveUser');
Route::get('api/user/authors', 'UserController@getAuthors');

//document apis
Route::post('/api/document/create', 'DocumentController@createDocument');
Route::post('/api/document/update', 'DocumentController@updateDocument');
Route::post('/api/document/delete', 'DocumentController@deleteDocument');
Route::get('/api/documents', 'DocumentController@getDocuments');
Route::get('/api/documents/user', 'DocumentController@getMyDocuments');
Route::get('/api/document/open', 'DocumentController@openDocument');
Route::get('/api/document/download', 'DocumentController@downloadDocument')->name('download');
Route::post('/api/document/upload', 'DocumentController@uploadDocument')->name('upload');
Route::get('/api/document/tags', 'DocumentController@getAllTags');
Route::post('/api/document/set', 'DocumentController@setViewers');

//user activity apis
Route::get('/api/activity', 'ActivityController@getUserActivityLog');

