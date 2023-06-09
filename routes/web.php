<?php

use app\Http\Controllers\ProfileController;
use app\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('posts', PostController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy', 'show'])
    ->middleware(['auth', 'verified']);


Route::get('/2048', function () {
        return view('2048');
    })->middleware(['auth', 'verified'])->name('2048');


Route::get('/snake', function () {
        return view('snake');
    })->middleware(['auth', 'verified'])->name('snake');


Route::get('/minesweeper', function () {
    return view('minesweeper');
})->middleware(['auth', 'verified'])->name('minesweeper');

Route::get('/action_page', function () {
    return view('chat_res');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/show/', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/save_post/{id}', [ProfileController::class, 'save_post'])->name('profile.save_post');
});

require __DIR__.'/auth.php';
