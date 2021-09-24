<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');
Route::resource('posts', PostsController::class);
/*Route::get('/user/{id}', function($id){
    return 'welcome user number ' .$id;
});*/

/*Route::get('/about', function(){
    return view('pages.about');
});*/

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
