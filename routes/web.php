<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/services', ServiceController::class)->name('services');
Route::get('/projects', ProjectController::class)->name('projects');
Route::get('/services/{service}', [ServiceController::class, 'single'])->name('services.single');
Route::get('/projects/{project}', [ProjectController::class, 'single'])->name('projects.single');
Route::get('/offers', OffersController::class)->name('offers');
Route::get('/page/{page}', PageController::class)->name('page');
