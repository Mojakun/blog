<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('tests/test','TestController@index');
//ブログの一覧を表示
Route::get('/','BlogController@showList')->name('blogs');
//ブログの登録画面の表示
Route::get('/blog/create','BlogController@showCreate')->name('create');
//ブログの登録画面の表示
Route::post('/blog/store','BlogController@exeStore')->name('store');
//ブログの詳細を表示
Route::get('/blog/{id}','BlogController@showDetail')->name('show');
//ブログの編集画面を表示
Route::get('/blog/edit/{id}','BlogController@showEdit')->name('edit');
//ブログの編集
Route::post('/blog/update/','BlogController@exeUpdate')->name('update');
//ブログの削除
Route::post('/blog/delete/{id}','BlogController@exeDelete')->name('delete');

