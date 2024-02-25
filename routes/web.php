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

Route::get("/login", [App\Http\Controllers\AuthController::class, 'login']);

Route::get("/dashboard", [App\Http\Controllers\HomeController::class, 'index']);
Route::get("/employees", [App\Http\Controllers\EmployeeController::class, 'index']);

Route::get("/online-attendance", [App\Http\Controllers\AttendanceController::class, 'onlineAttendance']);
Route::get("/attendance-regularization", [App\Http\Controllers\AttendanceController::class, 'attendanceRegularization']);
Route::get("/time-sheet-entry", [App\Http\Controllers\AttendanceController::class, 'timeSheetEntry']);
Route::get("/attendance/reports", [App\Http\Controllers\AttendanceController::class, 'attendanceReport'])->name('ddd');
