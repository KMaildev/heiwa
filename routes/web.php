<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LanguageController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('course', CourseController::class);
Route::resource('team', TeamController::class);

Route::get('eng', [LanguageController::class, 'lang_eng'])->name('eng');
Route::get('jp', [LanguageController::class, 'lang_jp'])->name('jp');
