<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Posts abaixo

Route::get('/posts/create',[\App\Http\Controllers\PostController::class, 'create'])->name('posts.create')->middleware('permission:write post');
Route::get('/posts/edit/{post}',[\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit')->middleware('permission:edit post');

//Users abaixo
Route::get('/user',[\App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('role:admin');

Route::get('/user/create',[\App\Http\Controllers\UserController::class, 'create'])->name('user.create')->middleware('role:admin');
Route::post('/user/store',[\App\Http\Controllers\UserController::class, 'store'])->name('user.store')->middleware('role:admin');

Route::get('/user/edit/{id}',[\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit')->middleware('role:admin');
Route::put('/user/update',[\App\Http\Controllers\UserController::class, 'update'])->name('user.update')->middleware('role:admin');





require __DIR__.'/auth.php';
