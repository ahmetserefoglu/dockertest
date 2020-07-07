<?php

use Illuminate\Support\Facades\Route;
use App\User;
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

Route::get('/users',function(){
    $users = User::paginate(10);

    return view('users',['users' => $users]);
})->middleware('verified');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gorev', 'HomeController@gorev')->name('gorev');

Route::resource('kurumsalajans','KurumsalAjansController'); 
/*Route::get('/kurumsalajans', 'KurumsalAjansController@index')->name('kurumsalajans.index');
Route::get('/kurumsalajans/create', 'KurumsalAjansController@create')->name('kurumsalajans.create');
Route::post('/kurumsalajans/store', 'KurumsalAjansController@store')->name('kurumsalajans.store');
Route::get('/kurumsalajans/edit/{id}', 'KurumsalAjansController@edit')->name('kurumsalajans.edit');
Route::post('/kurumsalajans/update', 'KurumsalAjansController@update')->name('kurumsalajans.update');
Route::post('/kurumsalajans/destroy/{id}', 'KurumsalAjansController@destroy')->name('kurumsalajans.destroy');*/
