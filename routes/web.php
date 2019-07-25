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

use App\Application;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register'=>false]);

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', function () {
    Session::flush();
    Auth::logout();

    return redirect('login');

});

Route::get('/hr', function () {
    $users=\App\User::all();
    $leaves=\App\Leave::paginate(7);
    $requests=Application::where('status','=','0')->get();
    $declined=Application::where('status','=','2')->get();

    return view('hr.dashboard',compact('users','requests','leaves','declined'));
});
//HR
Route::group(['hr' => 'middleware'], function () {
    Route::get('api/application','ApplicationController@api');
    Route::get('api/pending.blade.php','ApplicationController@api_pending');
    Route::get('api/department','ApplicationController@api_department');
    Route::get('calendar','CalendarController@index');
    Route::get('pending','ApplicationController@pending');
    Route::get('approve/{id}','ApplicationController@approve');
    Route::get('decline/{id}','ApplicationController@decline');
    Route::get('rejected','ApplicationController@reject');
    Route::get('today','ApplicationController@api_today');
    Route::get('add/users','UsersController@create');
    Route::post('create','UsersController@store');
    Route::get('trash/{id}','UsersController@destroy');
});



//USER

//ALL
Route::get('request','ApplicationController@create');
Route::get('timeline/{id}','CalendarController@timeline');
Route::post('apply','ApplicationController@store');
Route::get('user','UsersController@index');
Route::get('user/api','UsersController@api');
