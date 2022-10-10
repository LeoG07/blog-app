<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

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
Route::resource('/', BlogController::class);
Route::resource('/blog', BlogController::class);

// Route::get('/', function () {
//     return view('blog/index');
// });

Route::get('/admin', function () {
    return view('admin/index');
});

/*Route::get('/admin/post', function () {
    return view('admin/post');
});*/

Route::resource('admin/posts', PostController::class);

Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/blog', function () {
    return view('blog/index');
});

Route::get('/about', function () {
    return view('blog/about/index');
});

Route::get('/contact', function () {
    return view('blog/contact/index');
});

