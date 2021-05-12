<?php

use Illuminate\Support\Facades\Route;

//Controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstituteController;

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

Route::get('/', HomeController::class)->name('home');

//INSTITUTES
Route::get('institutes', [InstituteController::class, 'index'])->name('institutes.index');
Route::get('institutes/create', [InstituteController::class, 'create'])->name('institutes.create');
Route::post('institutes', [InstituteController::class, 'store'])->name('institutes.store');
Route::get('institutes/{institute}', [InstituteController::class, 'show'])->name('institutes.show');
Route::get('institutes/{institute}/edit', [InstituteController::class, 'edit'])->name('institutes.edit');
Route::post('institutes/{institute}', [InstituteController::class, 'update'])->name('institutes.update');
//COURSES
Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('courses/create', [CourseController::class, 'create']);
Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');
