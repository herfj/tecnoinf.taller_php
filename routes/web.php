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
Route::get('institutes/create', [InstituteController::class, 'create'])->middleware(['auth','admin'])->name('institutes.create');
Route::post('institutes', [InstituteController::class, 'store'])->middleware(['auth','admin'])->name('institutes.store');
Route::get('institutes/{institute}', [InstituteController::class, 'show'])->name('institutes.show');
Route::get('institutes/{institute}/edit', [InstituteController::class, 'edit'])->middleware(['auth','admin'])->name('institutes.edit');
Route::post('institutes/{institute}', [InstituteController::class, 'update'])->middleware(['auth','admin'])->name('institutes.update');
Route::delete('institute/{institute}', [InstituteController::class,'destroy'])->middleware(['auth','admin'])->name('institutes.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
