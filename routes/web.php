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
    Route::get('/admin/change-password',  [AdminController::class, 'getChangePassword'])->name('admin.changePassword');
    Route::post('/admin/change-password',  [AdminController::class, 'postChangePassword'])->name('admin.postchangePassword');
    Route::get('/admin/profile',  [AdminController::class, 'getProfile'])->name('admin.getprofile');
    Route::get('/admin/profile/edit',  [AdminController::class, 'getProfileEdit'])->name('admin.getprofileEdit');
    Route::post('/admin/profile/update',  [AdminController::class, 'postProfileUpdate'])->name('admin.postProfileUpdate');
    Route::get('/admin/employee/{id}/view',  [AdminController::class, 'getEmployeeProfileView'])->name('admin.getEmployeeProfileView');
    Route::get('/admin/employee/{id}/edit',  [AdminController::class, 'getEmployeeProfileEdit'])->name('admin.getEmployeeProfileEdit');
    Route::post('/admin/employee/{id}/update',  [AdminController::class, 'postEmpProfileUpdate'])->name('admin.postEmpProfileUpdate');
    Route::get('/admin/employee/{id}/delete',  [AdminController::class, 'getEmployeeProfileDelete'])->name('admin.getEmployeeProfileDelete');

    Route::get('/admin/all-employee',  [AdminController::class, 'getAllEmployee'])->name('admin.getAllEmployee');
    Route::get('/admin/add-new-employee',  [AdminController::class, 'getaddNewEmployee'])->name('admin.getaddNewEmployee');
    Route::post('/admin/add-new-employee',  [AdminController::class, 'postaddNewEmployee'])->name('admin.postaddNewEmployee');

    Route::get('/admin/change-employee-password',  [AdminController::class, 'getchangeEmployeePassword'])->name('admin.getchangeEmployeePassword');
    Route::post('/admin/change-employee-password',  [AdminController::class, 'postchangeEmployeePassword'])->name('admin.postchangeEmployeePassword');

    Route::get('/admin/all-departments',  [AdminController::class, 'getAllDepartments'])->name('admin.getAllDepartments');
    Route::get('/admin/all-employee-payslips',  [AdminController::class, 'getAllEmployeesPaySlips'])->name('admin.getAllEmployeesPaySlips');
    Route::get('/admin/employee-payslip-search',  [AdminController::class, 'getemployeesPaySlipSearch'])->name('admin.getemployeesPaySlipSearch');
    Route::get('/admin/employee-payslip-search-by-id',  [AdminController::class, 'getemployeesPaySlipSearchById'])->name('admin.getemployeesPaySlipSearchbyid');
    Route::get('/admin/employee-payslip/{id}/delete',  [AdminController::class, 'getPaySlipDelete'])->name('admin.userPayslipDelete');

    Route::get('/admin/uplode-payslips',  [AdminController::class, 'getuplodePaySlip'])->name('admin.getuplodePaySlip');
    Route::post('/admin/uplode-payslips',  [AdminController::class, 'postuplodePaySlip'])->name('admin.postuplodePaySlip');
});
/*
|--------------------------------------------------------------------------
| Employees Routes  
|--------------------------------------------------------------------------
*/
Route::middleware(['auth','role:employee'])->group(function () {
    Route::get('/employees/dashboard', [UsersController::class, 'getDashboard'])->name('employees.dashboard');
    Route::get('/employees/profile',  [UsersController::class, 'getProfile'])->name('employees.getprofile');
    Route::get('/employees/profile/edit',  [UsersController::class, 'getProfileEdit'])->name('employees.getprofileEdit');
    Route::post('/employees/profile/edit',  [UsersController::class, 'postProfileEdit'])->name('employees.postprofileEdit');

    Route::get('/employees/change-password',  [UsersController::class, 'getChangePassword'])->name('employees.changePassword');
    Route::post('/employees/change-password',  [UsersController::class, 'postChangePassword'])->name('employees.postchangePassword');


    Route::get('/employees/all-payslips',  [UsersController::class, 'getAllPaySlips'])->name('employees.getallPayslips');
});

Route::get('/all/forgot-password', [UsersController::class, 'getForgotPassword'])->name('getForgotPassword');

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
