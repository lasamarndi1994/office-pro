<?php

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

Route::middleware('guest')->group(function () {
    Route::get("/login", [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post("/login", [App\Http\Controllers\AuthController::class, 'authenticate']);

    Route::get("/forgot-password", [App\Http\Controllers\AuthController::class, 'forgotPassword'])->name('forgot.password');
});

Route::middleware('auth')->group(function () {
    Route::post("/logout", [App\Http\Controllers\AuthController::class, 'logout'])->name("logout");

    Route::get("/dashboard", [App\Http\Controllers\HomeController::class, 'index'])->name("dashboard");
    Route::get("/employees", [App\Http\Controllers\EmployeeController::class, 'index']);

    Route::get("/online-attendance", [App\Http\Controllers\AttendanceController::class, 'onlineAttendance']);
    Route::get("/attendance-regularization", [App\Http\Controllers\AttendanceController::class, 'attendanceRegularization']);
    Route::get("/time-sheet-entry", [App\Http\Controllers\AttendanceController::class, 'timeSheetEntry']);
    Route::get("/attendance/reports", [App\Http\Controllers\AttendanceController::class, 'attendanceReport']);

    Route::get("/leave-application", [App\Http\Controllers\LeaveController::class, 'leaveApplication']);
    Route::get("/apply-leave", [App\Http\Controllers\LeaveController::class, 'applyLeave']);
    Route::get("/leave-balance-report", [App\Http\Controllers\LeaveController::class, 'leaveBalanceReport']);

    Route::get("/my-profile", [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
    Route::get("/profile/educations", [App\Http\Controllers\UserController::class, 'education'])->name('education');
    Route::get("/profile/assets", [App\Http\Controllers\UserController::class, 'assets'])->name('assets');

//settings
    Route::get("/settings", [App\Http\Controllers\SettingController::class, 'index']);

    Route::prefix('setting')->group(function () {
        Route::resource('departments', App\Http\Controllers\DepartmentController::class);
    });

    Route::get("/setting/designations", [App\Http\Controllers\DesignationController::class, 'index']);

    Route::post("/setting/designation", [App\Http\Controllers\DesignationController::class, 'store']);

    Route::get("/onboard", [App\Http\Controllers\OnboardController::class, 'index']);

    Route::get("/contacts", [App\Http\Controllers\ContactController::class, 'index']);

    Route::inertia('/test', 'TestPage');
});
