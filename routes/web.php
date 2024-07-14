<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/services', \App\Http\Controllers\ServiceController::class)->name('services');
Route::get('/projects', \App\Http\Controllers\ProjectController::class)->name('projects');
Route::get('/services/{service}', [\App\Http\Controllers\ServiceController::class, 'single'])->name('services.single');
Route::get('/projects/{project}', [\App\Http\Controllers\ProjectController::class, 'single'])->name('projects.single');
Route::get('/offers', \App\Http\Controllers\OffersController::class, 'single')->name('offers');
Route::get('/page/{page}', \App\Http\Controllers\PageController::class)->name('page');
