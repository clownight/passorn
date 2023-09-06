<?php

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

Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('home',[App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('about-us',[App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('projects',[App\Http\Controllers\ProjectController::class,'index'])->name('projects');
Route::get('contact-us',[App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::get('project/{id}',[App\Http\Controllers\ProjectController::class,'detail'])->name('project_detail');