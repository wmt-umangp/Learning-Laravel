<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\democontroll;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\polymorph;
use App\Http\Controllers\reqcontroll;
use App\Http\Controllers\collectioncontroll;
use App\Http\Controllers\mutatorcontroller;
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
// Route::get('/home/{name}',function ($fname){
//     return view('home',['name' => $fname]);
// })-> where('name','[A-Za-z]+');
Route::view('/about', 'about')->middleware('Age');
Route::get('hello/{name}',[democontroll::class,'demo']);
Route::view('/noaccess', 'noaccess');


Route::get('/modeldata',[democontroll::class,'getdata']);


Route::get('/show',[crudcontroller::class,'index'])->name('user.index')->middleware('auth');
Route::post('/insertcontroller',[crudcontroller::class,'store'])->name('user.store')->middleware('auth');
Route::get('/editcontroller/{id}',[crudcontroller::class,'edit'])->name('user.update')->middleware('auth');

Route::patch('/updatecontroller/{id}',[crudcontroller::class,'update'])->name('user.edit')->middleware('auth');

Route::get('/destroycontroller/{id}',[crudcontroller::class,'destroy'])->name('user.delete')->middleware('auth');

Route::get('/insert',function (){
    return view('create');
})->middleware('auth');



///route for relationship model

Route::get('data',[membercontroller::class,'showdata']);

//Route for Polymorph relationship

Route::get('poly',[polymorph::class,'oneonepolym']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//route for register page
Route::get('/signing',function (){
    return view('form');
});


Route::Post('/reqcontroll',[reqcontroll::class,'reqdata'])->name('reqdata');


//route for collection controller
Route::get('/collection',[collectioncontroll::class,'collection']);

// route for accessor
Route::get('/accessor',[mutatorcontroller::class,'accessor']);

// route for mutator
Route::get('/mutator',[mutatorcontroller::class,'mutator']);

