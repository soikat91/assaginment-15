<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Middleware\GlobalMiddleware;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// question 1 route
Route::post('/register',[RegistrationController::class,'register']);

// question 2 route and question 3 log show 

Route::get('/home',[RegistrationController::class,'home'])->middleware(GlobalMiddleware::class);;//url log show
Route::get('/dashboard',[RegistrationController::class,'dashboard'])->middleware(GlobalMiddleware::class);;//url log show


Route::get('/hello',[RegistrationController::class,'hello'])->middleware(GlobalMiddleware::class);//url log show

// question 4 group middleware route

Route::middleware(['authMiddle'])->group(function(){

Route::get('/profile',[RegistrationController::class,'profile']);
Route::get('/setting',[RegistrationController::class,'setting']);
});


// question 5 create controller

Route::get('/product',[ProductController::class,'index']);
//Route::get('/product/{create}',[ProductController::class,'create']);
Route::post('/product',[ProductController::class,'store']);
Route::get('/product/{id}',[ProductController::class,'show']);
Route::get('/product/{id}/{edit}',[ProductController::class,'edit']);
Route::put('/product/{id}',[ProductController::class,'update']);
Route::delete('/product/{id}',[ProductController::class,'destroy']);



// question:6 invoked route

Route::get('/test',ContactController::class);


//question 7 create resource controller
Route::resource('/post',PostController::class);


// question 8 ans display blade 

Route::get('/', function () {
    return view('welcome');
});