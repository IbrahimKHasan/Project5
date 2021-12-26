<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Client\Request;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::post('/welcomebaba',function(){

    return view('index');
})->name('indexo');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::post('reddit/register',[UserLoginController::class,'register'])->name('register');;
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
    Route::get('manage_user',['App\Http\Controllers\UserController','manage_user'])->name('manage_user');
    Route::get('create_user',['App\Http\Controllers\UserController','create_user'])->name('create_user');
    Route::get('edit/{user}',['App\Http\Controllers\UserController','edit_user'])->name('edit_user');
    Route::patch('/{id}',['App\Http\Controllers\UserController','update_user'])->name('update_user');
    Route::delete('/{user}',['App\Http\Controllers\UserController','destroy'])->name('destroy');
    Route::get('{user}/edit',['App\Http\Controllers\UserController','edit_user'])->name('edit');
    Route::patch('/{user}',['App\Http\Controllers\UserController','update_user'])->name('update');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

################## For Admin #############################
Route::name('admin.')->prefix('admin')->middleware(['auth'])->group(function () {
	Route::resource("manage_admins", AdminController::class);
    Route::resource("manage_categories", CategoryController::class);
    Route::resource("manage_posts", PostController::class);
    Route::resource("manage_comments", CommentController::class);
});
Route::get("userLogin",[UserLoginController::class,'UserLogin']);
Route::get("userLogin",[UserLoginController::class,'UserLogin']);


Route::get('reddit', function(){
	return view('index');
});


