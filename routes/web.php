<?php

use App\Models\Photo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;

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

Route::get('/upload-image',[ImageController::class,'index'])->middleware('auth');
Route::post('/store',[UserController::class, 'store']);
Route::post('/save', [ImageController::class, 'save']);
Route::get('/viewimg',[ImageController::class,'show'])->middleware('auth');
Route::get('/',function(){
    return view('index');
});
Route::get('/about-me',function(){
    return view('about-me');
}
)->middleware('auth');
Route::get('/signup',[UserController::class,'signup'])->middleware('guest');

Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/authenticate',[UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);