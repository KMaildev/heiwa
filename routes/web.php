<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeamController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('course', CourseController::class);
Route::resource('team', TeamController::class);
