<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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


Route::get('/addtasks', function () {
    return view('add-tasks');
});
Route::post('/addtasks-submit', "App\Http\Controllers\AddTaskController@submit" );
Route::get('/', "App\Http\Controllers\AddTaskController@index" )->name('all-message');
Route::get('/main/{user_id}', "App\Http\Controllers\AddTaskController@message" )->name('message');
Route::get('/main/{user_id}/update', "App\Http\Controllers\AddTaskController@messageUpdate" )->name('message-update');
Route::get('/main/{user_id}/delete', "App\Http\Controllers\AddTaskController@messageDelete" )->name('message-delete');
Route::post('/main/{user_id}/update', "App\Http\Controllers\AddTaskController@messageUpdateSubmit" )->name('message-update-submit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
