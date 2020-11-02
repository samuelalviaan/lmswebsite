<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('search', [App\Http\Controllers\SearchController::class, 'course'])->name('search.courses');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/belajarcourse', [App\Http\Controllers\HomeController::class, 'show'])->name('belajar.user');

Route::resource('courses', 'CourseController');

Route::get('/course/edit/{course}', 'CourseController@edit')->name('courses.edit');
Route::post('/course/edit/{course}', 'CourseController@update');
Route::get('/test/search', [App\Http\Controllers\CourseController::class, 'search']);



// CONTENT
Route::resource('contents', 'ContentController')->middleware('admin');

Route::get('/content', 'ContentController@index')->name('contents.index');

Route::get('/create-new-contents', 'ContentController@create')->name('contents.create');

Route::post('/content/store', 'ContentController@store')->name('contents.store');

Route::get('/edit-content/{content}', 'ContentController@edit')->name('contents.edit');
Route::post('/edit-content/{content}', 'ContentController@update');

Route::post('contents/delete/{id}', 'ContentController@destroy')->name('contents.delete');


// USER

Route::get('/user', 'UserController@index')->name('users.index');

Route::get('/create-new-user', 'UserController@create')->name('users.create');



Route::middleware('auth:admin')->group(function () {
});
