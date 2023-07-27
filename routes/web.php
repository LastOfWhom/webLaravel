<?php

use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::prefix('/profile')->group(function (){
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::prefix('/posts')->group(function (){
        Route::get('/', [App\Http\Controllers\Post\GetPostController::class, 'getAllPosts'] )->name('posts.index');
        Route::get('/create', [App\Http\Controllers\Post\GetPostController::class, 'create'] )->name('posts.create');
        Route::post('/create', [App\Http\Controllers\Post\GetPostController::class, 'store'] )->name('posts.store');
        Route::get('/show/{post}', [App\Http\Controllers\Post\GetPostController::class, 'show'] )->name('posts.show');
        Route::post('/show/grade/{post}', [App\Http\Controllers\Post\GetPostController::class, 'addGrade'] )->name('posts.update');
    });
});


require __DIR__.'/auth.php';
