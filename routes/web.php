<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoadController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\GravelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RContentController;
use App\Http\Controllers\TContentController;
use App\Http\Controllers\GContentController;
use App\Http\Controllers\HContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

use Illuminate\Http\Request;

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

Route::get('/', [LoginController::class, 'index']);
Route::get('/index', [IndexController::class, 'index']);
Route::get('/road', [RoadController::class, 'index']);
Route::get('/profile.edit', [ProfileController::class, 'edit']);

Route::get('/hcontent/content', [HContentController::class, 'index']);
Route::get('/rcontent/content', [RContentController::class, 'index']);
Route::get('/tcontent/content', [TContentController::class, 'index']);
Route::get('/gcontent/content', [GContentController::class, 'index']);

Route::resource('gravel', GravelController::class);
Route::resource('road', RoadController::class);
Route::resource('time', TimeController::class);

Route::resource('rcontent', RContentController::class);
Route::resource('tcontent', TContentController::class);
Route::resource('gcontent', GContentController::class);
Route::resource('hcontent', HContentController::class);
Route::resource('hcontent', HContentController::class);

Route::get('/time', [TimeController::class, 'index']);
Route::get('/gravel', [GravelController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);
Route::get('/contact', [CommentController::class, 'index'])->middleware('auth');
Route::post('/contact', [CommentController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index']);



Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});



