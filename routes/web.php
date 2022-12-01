<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/login', [UsersController::class, 'getLogin'])->name('users.login');
// Route::get('/user/forget-password', [UsersController::class, 'getForgetPassword'])->name('users.forgetpassword');
// Route::get('/user/dashboard', [UsersController::class, 'getDashboard'])->name('user.dashboard');
Route::get('/dashboard/erros', function () { return "eerros ";})->name('noaccess');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/dashboard',  [AdminController::class, 'getDashboard'])->name('admin.dashboard');
});
/*
|--------------------------------------------------------------------------
| Employees Routes  
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','role:employee'])->group(function () {
    Route::get('/employees/dashboard', [UsersController::class, 'getDashboard'])->name('employees.dashboard');
});
/*
|--------------------------------------------------------------------------
| Common Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('404');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/erros', function () { return "eerros ";})->name('noaccess');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// users
