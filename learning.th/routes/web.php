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

Auth::routes();
/// chat
/// Newletter

Route::post('/sendmessage','SendMessageController@sendMessage');
Route::post('/newletter','Admin\NewletterController@create');


// upload File
Route::get('file','FileController@index');
Route::post('file','FileController@doUpload');
// ! upload file
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Frontend\HomePageController@index');
Route::get('/about', 'Frontend\AboutController@index');
Route::get('/about/hoang','Frontend\AboutController@hoang_info');
Route::get('/about/linh','Frontend\AboutController@linh_info');
Route::get('/about/viet','Frontend\AboutController@viet_info');
Route::get('/about/anh','Frontend\AboutController@anh_info');
Route::get('/about/thanh','Frontend\AboutController@thanh_info');
Route::get('/room/detail', 'Frontend\RoomController@join_room');
Route::get('/room/details', 'Frontend\RoomController@join_rooms');
Route::get('/room/download/{id}','Frontend\RoomController@download');
Route::get('/news','Frontend\NewController@index');
Route::get('/newdetail/{id}','Frontend\NewController@detail');
Route::get('/document/download/{id}','Admin\DocumentController@downloadFile');
Route::get('/document/mydocument','Frontend\DocumentController@mydocument');

Route::post('/document/create/','Frontend\DocumentController@send');

Route::get('/document/report/{id}','Frontend\DocumentController@report');
Route::post('/document/report/{id}','Frontend\DocumentController@savereport');

// room

Route::post('/room/create', 'Frontend\RoomController@store');
Route::get('/room/detail/{id}', 'Frontend\RoomController@join_room');
Route::get('/room/outroom/{id}', 'Frontend\RoomController@outRoom');
Route::get('/room/writeboard/{id}', 'Frontend\RoomController@writeBoard');
Route::post('/room/writeboard/{id}', 'Frontend\RoomController@write');
Route::get('/room/senddocument/{id}', 'Frontend\RoomController@senddocument');
Route::post('/room/senddocument/{id}', 'Frontend\RoomController@updatedocument');
Route::get('/room/writeboard1/{id}', 'Frontend\RoomController@writeBoard1');
Route::post('/room/writeboard1/{id}', 'Frontend\RoomController@write');
Route::get('/room/senddocument1/{id}', 'Frontend\RoomController@senddocument1');
Route::post('/room/senddocument1/{id}', 'Frontend\RoomController@updatedocument');
Route::post('/room/search','Frontend\RoomController@search');




Route::group(['prefix' => 'document'], function ()
{
    /*Route::get('/other', ['as' => FRONT_DOCUMENT_OTHER, 'uses' => 'Frontend\DocumentController@other']);
    Route::get('/math', ['as' => FRONT_DOCUMENT_MATH, 'uses' => 'Frontend\DocumentController@math']); // toan
    Route::get('/physics', ['as' => FRONT_DOCUMENT_PHYSICS, 'uses' => 'Frontend\DocumentController@physics']);// ly
    Route::get('/chemistry', ['as' => FRONT_DOCUMENT_CHEMISTRY, 'uses' => 'Frontend\DocumentController@chemistry']);// hoa
    Route::get('/literature', ['as' => FRONT_DOCUMENT_LITERATURE, 'uses' => 'Frontend\DocumentController@literature']);// van
    Route::get('/english', ['as' => FRONT_DOCUMENT_ENGLISH, 'uses' => 'Frontend\DocumentController@english']);// anh
    Route::get('/biology', ['as' => FRONT_DOCUMENT_BIOLOGY, 'uses' => 'Frontend\DocumentController@biology']);// sinh
    Route::get('/geography', ['as' => FRONT_DOCUMENT_GEOGRAPHY, 'uses' => 'Frontend\DocumentController@geography']);// dia
    Route::get('/create', ['as' => FRONT_DOCUMENT_CREATE, 'uses' => 'Frontend\DocumentController@create']);
    Route::get('/', ['as' => FRONT_DOCUMENT_INDEX, 'uses' => 'Frontend\DocumentController@index']);*/
    Route::get('/other','Frontend\DocumentController@other');
    Route::get('/math', 'Frontend\DocumentController@math'); // toan
    Route::get('/physics', 'Frontend\DocumentController@physics');// ly
    Route::get('/chemistry', 'Frontend\DocumentController@chemistry');// hoa
    Route::get('/literature', 'Frontend\DocumentController@literature');// van
    Route::get('/english', 'Frontend\DocumentController@english');// anh
    Route::get('/biology', 'Frontend\DocumentController@biology');// sinh
    Route::get('/geography','Frontend\DocumentController@geography');// dia
    Route::get('/create','Frontend\DocumentController@create');
    Route::get('/', 'Frontend\DocumentController@index');
    
    
});
Route::group(['prefix' => 'room'], function ()
{
    /*Route::get('/other', ['as' => FRONT_ROOM_OTHER, 'uses' => 'Frontend\RoomController@other']);
    Route::get('/math', ['as' => FRONT_ROOM_MATH, 'uses' => 'Frontend\RoomController@math']); // toan
    Route::get('/physics', ['as' => FRONT_ROOM_PHYSICS, 'uses' => 'Frontend\RoomController@physics']);// ly
    Route::get('/chemistry', ['as' => FRONT_ROOM_CHEMISTRY, 'uses' => 'Frontend\RoomController@chemistry']);// hoa
    Route::get('/literature', ['as' => FRONT_ROOM_LITERATURE, 'uses' => 'Frontend\RoomController@literature']);// van
    Route::get('/english', ['as' => FRONT_ROOM_ENGLISH, 'uses' => 'Frontend\RoomController@english']);// anh
    Route::get('/biology', ['as' => FRONT_ROOM_BIOLOGY, 'uses' => 'Frontend\RoomController@biology']);// sinh
    Route::get('/geography', ['as' => FRONT_ROOM_GEOGRAPHY, 'uses' => 'Frontend\RoomController@geography']);// dia
    Route::get('/create', ['as' => FRONT_ROOM_CREATE, 'uses' => 'Frontend\RoomController@create']);
    Route::get('/', ['as' => FRONT_ROOM_INDEX, 'uses' => 'Frontend\RoomController@index']);*/
    Route::get('/other','Frontend\RoomController@other');
    Route::get('/math', 'Frontend\RoomController@math'); // toan
    Route::get('/physics', 'Frontend\RoomController@physics');// ly
    Route::get('/chemistry', 'Frontend\RoomController@chemistry');// hoa
    Route::get('/literature', 'Frontend\RoomController@literature');// van
    Route::get('/english', 'Frontend\RoomController@english');// anh
    Route::get('/biology', 'Frontend\RoomController@biology');// sinh
    Route::get('/geography','Frontend\RoomController@geography');// dia
    Route::get('/create','Frontend\RoomController@create');
    Route::get('/', 'Frontend\RoomController@index');
});
/** Route admin
 */
Route::prefix('admin')->group(function ()
{
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    // dang ki
    Route::get('/register', 'AdminController@create')->name('admin.register');
    Route::post('register', 'AdminController@store')->name('admin.register.store');
    // dang nhap
    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    // dang xuat
    Route::post('logout', 'Auth\Admin\loginController@logout')->name('admin.auth.logout');
    // document
    Route::get('/document','Admin\DocumentController@index');
    Route::get('/document/repository','Admin\DocumentController@index');
    
    // document/repository
    Route::get('/document/create','Admin\DocumentController@create');
    Route::get('/document/{id}/edit','Admin\DocumentController@edit');
    Route::get('/document/{id}/delete','Admin\DocumentController@delete');
    Route::post('/document','Admin\DocumentController@store');
    Route::post('/document/{id}','Admin\DocumentController@update');
    Route::post('/document/{id}/delete','Admin\DocumentController@destroy');
    
    // document/received
    Route::get('/document/received','Admin\DocumentController@listReceived');
    Route::get('/document/{id}/save','Admin\DocumentController@save');
   /* Route::post('/document/{id}/delete','Admin\DocumentController@delete');*/
    // Document/ report
    Route::get('/document/report','Admin\DocumentController@report');
    Route::get('/document/report/{id}/seen','Admin\DocumentController@seenReport');
    Route::get('/document/report/{id}/delete','Admin\DocumentController@deleteReport');
    // New
    Route::get('/new','Admin\NewController@index');
    Route::get('new/create','Admin\NewController@create');
    Route::get('new/{id}/edit','Admin\NewController@edit');
    Route::get('new/{id}/delete','Admin\NewController@delete');
    Route::post('new','Admin\NewController@store');
    Route::post('new/{id}','Admin\NewController@update');
    Route::post('new/{id}/delete','Admin\NewController@destroy');
    
    // newletter
    Route::get('/newletter','Admin\NewletterController@index');
    Route::get('newletter/{id}/delete','Admin\NewletterController@delete');
    Route::post('newletter/{id}/delete','Admin\NewletterController@destroy');
    
    
});
Auth::routes();
Route::get('/', 'Frontend\HomePageController@index')->name('home');
Route::get('/userdetail','Frontend\UserController@index')->name('userdetail');
Route::post('/userdetail','Frontend\UserController@store');




