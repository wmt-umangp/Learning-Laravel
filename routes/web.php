<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroll;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\membercontroller;
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

// Route::get('/home',function(){
//     return view('home');
// });
Route::get('/home/{name}',function ($fname){
    return view('home',['name' => $fname]);
})-> where('name','[A-Za-z]+');
Route::view('/about', 'about')->middleware('Age');
Route::get('hello/{name}',[democontroll::class,'demo']);
Route::view('/noaccess', 'noaccess');


Route::get('/modeldata',[democontroll::class,'getdata']);


Route::get('/show',[crudcontroller::class,'index'])->name('user.index');
Route::post('/insertcontroller',[crudcontroller::class,'store'])->name('user.store');
Route::get('/editcontroller/{id}',[crudcontroller::class,'edit'])->name('user.update');

Route::patch('/updatecontroller/{id}',[crudcontroller::class,'update'])->name('user.edit');

Route::get('/destroycontroller/{id}',[crudcontroller::class,'destroy'])->name('user.delete');

Route::get('/insert',function (){
    return view('create');
});



///route for relationship model

Route::get('data',[membercontroller::class,'showdata']);



