<?php

use Illuminate\Support\Facades\Route;

//Controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\UserController;

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

//ADMIN - USERS
Route::get('admin/users', [UserController::class, 'index'])->middleware(['auth','admin'])->name('admin.users.index');
Route::get('admin/users/create', [UserController::class, 'create'])->middleware(['auth','admin'])->name('admin.users.create');
Route::post('admin/users', [UserController::class, 'store'])->middleware(['auth','admin'])->name('admin.users.store');
Route::get('admin/users/{user}', [UserController::class, 'show'])->middleware(['auth','admin'])->name('admin.users.show');
Route::get('admin/users/{user}/edit', [UserController::class, 'edit'])->middleware(['auth','admin'])->name('admin.users.edit');
Route::post('admin/users/{user}', [UserController::class, 'update'])->middleware(['auth','admin'])->name('admin.users.update');
Route::delete('admin/users/{user}', [UserController::class,'destroy'])->middleware(['auth','admin'])->name('admin.users.destroy');


//INSTITUTES
Route::get('institutes', [InstituteController::class, 'index'])->name('institutes.index');
Route::get('institutes/create', [InstituteController::class, 'create'])->middleware(['auth','admin'])->name('institutes.create');
Route::post('institutes', [InstituteController::class, 'store'])->middleware(['auth','admin'])->name('institutes.store');
Route::get('institutes/{institute}', [InstituteController::class, 'show'])->name('institutes.show');
Route::get('institutes/{institute}/edit', [InstituteController::class, 'edit'])->middleware(['auth','admin'])->name('institutes.edit');
Route::post('institutes/{institute}', [InstituteController::class, 'update'])->middleware(['auth','admin'])->name('institutes.update');
Route::delete('institute/{institute}', [InstituteController::class,'destroy'])->middleware(['auth','admin'])->name('institutes.destroy');

//COURSES
Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('courses/create', [CourseController::class, 'create']);
Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','admin'])->name('dashboard');

require __DIR__.'/auth.php';
