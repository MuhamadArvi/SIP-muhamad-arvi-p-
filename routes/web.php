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
use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/a', function () {
    $users = DB::table('roles')
    ->where('name','user')
    ->first();
    dd($users->id);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
