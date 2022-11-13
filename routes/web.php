<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EloquentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubcategoryController;
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
//  });
// Route::get('/TEST', function () {
//     echo ('Hello Word');
// });
// Route::get('/TEST2', function () {
//     echo ('welcome TEST2');
// });
// Route::get('index', function () {
//     return ('welcome index');
// });
// Route::get('index1', function () {
//     return ('test.index');
// });
// Route::view('view','welcome');
// Route::view('view','welcome');
// Route::get('user/{name}/{age}/{year}', function($name, $age , $year){
//     echo 'User Name:'.$name. "&& User Age".$age .'&& User  year'. $year;
// });
// Route::view('index' , 'news.parent');
// Route::view('home' , 'news.index')->name('news.home');
// Route::view('contact' , 'news.contact')->name('news.contact');
// Route::view('all' , 'news.all-news')->name('news.all');
// Route::view('detailes' , 'news.newsdetailes')->name('news.detailes');



Route::resource('orders', OrderController::class);
Route::resource('Image', ImageController::class);
Route::resource('Subcategory', SubcategoryController::class);
Route::resource('Category',CategoryController::class); 

Route::resource('eloquents',EloquentController::class);

// Route::resource('users',UserController::class);

Route::get('eloquents_restore/{id}',[EloquentController::class,'restore']);

Route::get('eloquents_forseDelete/{id}',[EloquentController::class,'forseDelete']);