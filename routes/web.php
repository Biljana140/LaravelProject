<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;

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

Route::get('/email', function(){
    return new NewUserWelcomeMail();
});

Route:: post('follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');

Route::get('/p/create', 'PostsController@create');

Route::post('/p', 'PostsController@store');

Route::get('/p/{post}', 'PostsController@show');



Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');



// Route::get('/', function(){
//     echo "<pre>";
//     var_dump(public_path());
//     var_dump(base_path());
//     var_dump(storage_path());
//     var_dump(app_path());

//     var_dump(public_path('storage'));
//     var_dump(public_path('images'));
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
