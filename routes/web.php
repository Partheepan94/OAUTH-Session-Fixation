<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;

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

// Route::get('/homepage', function () {
//     return view('homepage');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/', function () {
//     return view('login');
// });

Route::get('firstLogin', 'PageController@firstLogin');

Route::get('login/{id}', 'PageController@login');
Route::get('homepage/{id}', 'PageController@homepage');
Route::get('/register', 'PageController@register');

Route::post('loginPost', 'LoginController@login');
Route::post('registerPost', 'RegisterController@register');