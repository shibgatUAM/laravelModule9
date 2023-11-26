<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'getHome'])->name('home');
Route::get('/about', [AboutController::class, 'getAbout'])->name('about');
Route::get('/project', [ProjectController::class, 'getProject'])->name('project');
Route::get('/contact', [ContactController::class, 'getContact'])->name('contact');

