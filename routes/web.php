<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Login;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PlaceController;
use App\Models\Packages;
use App\Models\Places;
use App\Models\Posts;
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

Route::get('/', function () {
        return view('welcome');
});

Route::get('/about',function(){
    return view('about');
});
Route::get('/packages',[PackageController::class,'index']);
Route::get('/find',[PackageController::class,'index']);
Route::post('/packages',[PackageController::class,'search'])->name('packages');
Route::get('detail/{id}',[PackageController::class,'package']);
Route::get('place/{id}',[PlaceController::class,'index']);
Route::get('activity/{id}',[ActivityController::class,'index']);
Route::get('/gallery',function(){
    return view('gallery');
});
Route::get('/contact',function(){
    return view('contact');
});

Route::post('contact',[ContactController::class,'index']);
Route::post('comment',[CommentController::class,'index']);
