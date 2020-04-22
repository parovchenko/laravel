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

Route::namespace('Web')->group(function () {
    /**
     * HomeController
     */
    Route::get('/', 'HomeController@index');

    /**
     * CompanyController
     */
    Route::get('/about-us', 'CompanyController@aboutUs')->name('aboutUs');
    Route::get('/contact-us', 'CompanyController@contactUs')->name('contactUs');
    Route::get('/leadership', 'CompanyController@leadership')->name('leadership');
    Route::get('/why-choose-us', 'CompanyController@whyChooseUs')->name('whyChooseUs');
    Route::get('/our-history', 'CompanyController@ourHistory')->name('ourHistory');
    Route::get('/careers', 'CompanyController@careers')->name('careers');
});
