<?php

use App\Http\Controllers\admin\content\CategoryController;
use App\Http\Controllers\admin\content\MahController;
use App\Http\Controllers\admin\content\PostController;
use App\Http\Controllers\HadiController;
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



Route::prefix('admin')->namespace('admin')->group(function () {
   Route::prefix('content')->namespace('content')->group(function () {

        Route::prefix('category')->namespace('category')->group(function () { 
            Route::get('/create',[CategoryController::class,'create'])->name('admin.content.category.create');
            Route::post('/store',[CategoryController::class,'store'])->name('admin.content.category.store');
            Route::get('/index',[CategoryController::class,'index'])->name('admin.content.category.index');


            Route::get('/edit/{postCategory}',[CategoryController::class,'edit'])->name('admin.content.category.edit');
            Route::put('/update/{postCategory}',[CategoryController::class,'update'])->name('admin.content.category.update');

            Route::delete('/destroy/{postCategory}',[CategoryController::class,'destroy'])->name('admin.content.category.destroy');


        });





        Route::prefix('post')->namespace('post')->group(function () {

            
        Route::get('/create',[PostController::class,'create'])->name('admin.content.post.create');
       Route::post('/store',[PostController::class,'store'])->name('admin.content.post.store');
     Route::get('/index',[PostController::class,'index'])->name('admin.content.post.index');
    
     Route::get('/edit/{post}',[PostController::class,'edit'])->name('admin.content.post.edit');
     Route::put('/update/{post}',[PostController::class,'update'])->name('admin.content.post.update');

     Route::delete('/destroy/{post}',[PostController::class,'destroy'])->name('admin.content.post.destroy');

      });

   });

});