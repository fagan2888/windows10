<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use LaravelForum\Http\Controllers\DiscussionsController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('dus', 'DusController');
Route::resource('discussion/{discussion}/replies','RepliesController');
Route::get('users/notifications',[UsersController::class, 'notifications'])->name('users.notif');
Route::resource('admin/users', 'AdminUsersController');
Route::post('admin/users/store', 'AdminUsersController@store')->name('admin.users.store');
