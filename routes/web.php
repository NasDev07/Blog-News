<?php

use Illuminate\Support\Facades\Route;

// User
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController as UserHomeController;

// Admin
use App\Http\Controllers\UserController as adminUserController;
use App\Http\Controllers\adminCategoryController as adminCategoryController;
use App\Http\Controllers\DashboardPostController as adminDashboardPostController;
use App\Http\Controllers\SofdeletedController;

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

// untuk client / umum port berita
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [UserHomeController::class, 'index']);
// Halaman single post
// Route::get('posts/{post:slug}', [UserHomeController::class, 'show']);



// perbaikan dari Nas untuk user & admin
// dashboard
Route::get('/dashboard', function () {
    $menuDashbord = 'active';
    return view('dashboard', compact('menuDashbord'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// perbaikan dari Nas untuk admin
// dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('users', adminUserController::class);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('category', adminCategoryController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('posts', adminDashboardPostController::class);
});

Route::get('/dataDelete', [SofdeletedController::class, 'postsdel'])->middleware('auth');
Route::get('/data/{id}/restore', [SofdeletedController::class, 'restore'])->middleware('auth');



require __DIR__ . '/auth.php';