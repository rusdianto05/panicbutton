<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;

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
// create middleware admin
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [UsersController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [UsersController::class, 'index'])->name('user.index');
    Route::get('/create', [UsersController::class, 'create'])->name('user.create');
    Route::post('/create/store', [UsersController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('user.edit');
    Route::put('/edit/update/{id}', [UsersController::class, 'update'])->name('user.update');
    Route::delete('/delete/{id}', [UsersController::class, 'destroy'])->name('user.destroy');
});
Route::post('/register/store', [UsersController::class, 'storeguest'])->name('guest.store');
Route::get('/register', [UsersController::class, 'register'])->name('guest.register');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
