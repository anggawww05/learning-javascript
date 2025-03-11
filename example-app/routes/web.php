<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {
    // Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'view'])->name('view.dashboard');
    Route::get('/crud', [CategoryController::class, 'view'])->name('view.crud');
    Route::get('/crud/add', [CategoryController::class, 'viewAdd'])->name('view.add');
    Route::post('/crud/add', [CategoryController::class, 'createCategory'])->name('create.category');
    Route::get('/crud/edit/{id}', [CategoryController::class, 'viewEdit'])->name('view.edit');
    Route::post('/crud/edit/{id}', [CategoryController::class, 'updateCategory'])->name('edit.category');
    Route::get('/crud/detail/{id}', [CategoryController::class, 'viewDetail'])->name('view.detail');
    Route::post('/crud/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'view'])->name('view.register');
    Route::post('/register', [RegisterController::class, 'create'])->name('create.register');
    Route::get('/login', [LoginController::class, 'view'])->name('view.login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('post.login');
});







// Route::get('/1', function () {
//     return view('tutorialJS');
// });
// Route::get('/2', function () {
//     return view('tutorialJS2');
// });
// Route::get('/3', function () {
//     return view('tutorialJS3
// });
// Route::get('/4', function () {
//     return view('tutorialJS4');
// });
// Route::get('/5', function () {
//     return view('tutorialJS5');
// });
// Route::get('/6', function () {
//     return view('tutorialJS6');
// });
// Route::get('/7', function () {
//     return view('tutorialJS7');
// });
// Route::get('/8', function () {
//     return view('tutorialJS8');
// });
