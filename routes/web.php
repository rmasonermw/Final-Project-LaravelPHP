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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('home');
});
Route::get('home', 'HomeController@show')->name('home');
Route::get('about', 'AboutController@show')->name('about');
Route::get('contact', 'ContactController@show')->name('contact');

Route::group(['prefix' => 'members'], function(){
    Route::get('/', 'MembersController@memberIndex')->name('memberIndex');
    Route::get('people', 'MembersController@showPeople')->name('showPeople');
    Route::get('horses', 'MembersController@showHorses')->name('showHorses');
    Route::get('showSchedule', 'MembersController@showSchedule')->name('showSchedule');
    Route::get('{memberId}', 'MembersController@memberID')->where('memberId', '[0-9]+')->name('showMemberId');
});


//closure routes and reg expressions
Route::get('howManyHorses/{howManyHorses}', function($howManyHorses) {
    return 'You have '.$howManyHorses.' horses.';
})->where('howManyHorses', '[0-9]+')->name('howManyHorses');

Route::get('howManyShows/{howManyShows}', function($howManyShows) {
    return 'You have been to '.$howManyShows.' horse shows.';
})->where('howManyShows', '[0-9]+')->name('howManyShows');

/*
Route::get('about', array('as' => 'about',function () {
    return view('about');
}));

Route::get('home', array('as' => 'home', function () {
    return view('home');
}));

Route::get('contact', array('as' => 'contact', function () {
    return view('contact');
}));
*/