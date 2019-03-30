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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware' =>'admin'],function (){

        Route::get('/index','AdminController@index')->name('admin.index');
        //Setting
        Route::resource('setting','SettingController');
        //Page
        Route::resource('mainpagesetting','MainPageController');
        Route::resource('page','PageController');
        Route::resource('service','ServiceController');
        Route::resource('project','ProjectController');
        Route::resource('projectcategory','ProjectCategoryController');
        Route::resource('reference','ReferenceController');
        Route::resource('slider','SliderController');
        Route::resource('blog','BlogController');
        Route::resource('blogcategory','BlogCategoryController');
        Route::resource('menu','MenuController');
        Route::resource('gallery','GalleryController');



    });

