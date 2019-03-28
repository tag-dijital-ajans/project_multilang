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

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','middleware' =>'admin'],function (){

        Route::get('/index','AdminController@index')->name('admin.index');
        //Setting
        Route::resource('setting','SettingController');
        //Page
        Route::resource('mainpage','MainPageController');
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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {


        Route::get('/home', 'HomeController@index')->name('home'); //Laravel Mainpage
        Route::get('/','Main\MainpageController@index')->name('home.page'); //Mainpage
        Route::get(LaravelLocalization::transRoute('routes.projects').'/', 'Main\MainpageController@projects')->name('projects.page'); //Projects Page
        Route::get(LaravelLocalization::transRoute('routes.project').'/', 'Main\MainpageController@project')->name('project.page'); //Projects Page
        Route::get(LaravelLocalization::transRoute('routes.page').'/', 'Main\MainpageController@page')->name('page.single'); //Single Page
        Route::get(LaravelLocalization::transRoute('routes.contact').'/', 'Main\MainpageController@contact')->name('contact.page'); //Contact Page
        Route::get(LaravelLocalization::transRoute('routes.blog').'/', 'Main\MainpageController@blog')->name('blog.page'); //Blog Page
        Route::get(LaravelLocalization::transRoute('routes.post').'/', 'Main\MainpageController@post')->name('blog.post'); //Post Page
        Route::get(LaravelLocalization::transRoute('routes.gallery').'/', 'Main\MainpageController@gallery')->name('gallery.page'); //GalleryPage




        /*Route::get(LaravelLocalization::transRoute('routes.yeni').'/', 'YeniController@index')->name('yeni');*/
        //lang/(dil)/routes.php içerisinde url dil yapısı için çeviriler
    });

