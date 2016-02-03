<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| https://laracasts.com/series/laravel-5-fundamentals
| also know its name location (url) then function called
*/

Route::get('/', 'PagesController@welcome');//default page

Route::get('/home', 'PagesController@goHome');//rerouts to default page.
Route::get('International-projects', 'PagesController@International_projects');
Route::get('Local-Projects', 'PagesController@Local_Projects');
Route::get('Past-Projects', 'PagesController@Past_Projects');
Route::get('Calendar', 'PagesController@Calendar');
Route::get('Sustainability-Courses', 'PagesController@Sustainability_Courses');
Route::get('sponcers', 'PagesController@sponcers');
Route::get('contacts', 'PagesController@contacts');
Route::get('ESW-National', 'PagesController@ESW_National');
Route::get('Minute-Report', 'PagesController@Minute_Report');
Route::get('jsp', 'PagesController@jsp');