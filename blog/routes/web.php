<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;


Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/product/all',[ProductController::class,'list'])->name('product.list');
Route::get('/product/details/{id}/info',[ProductController::class,'details'])->name('product.details');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create',[ProductController::class,'createSubmit'])->name('product.create.submit');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/create',[StudentController::class,'createSubmit'])->name('student.create.submit');
Route::get('/student/all',[StudentController::class,'list'])->name('student.list');
Route::get('/student/details/{id}/info',[StudentController::class,'details'])->name('student.details');

