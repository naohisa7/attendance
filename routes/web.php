<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\UserController;

//打刻ページ
Route::get('/', [WorkController::class, 'work'])->middleware('auth')->name('work');
Route::post('/punch_in', [WorkController::class, 'punchIn'])->name('punch_in');
Route::post('/punch_out', [WorkController::class, 'punchOut'])->name('punch_out');
Route::post('/break_start', [WorkController::class, 'breakStart'])->name('break_start');
Route::post('/break_end', [WorkController::class, 'breakEnd'])->name('break_end');

//日付別勤怠ページ
Route::get('/attendance', [WorkController::class, 'attendance'])->middleware('auth')->name('attendance');
Route::get('/attendance_nextdate', [WorkController::class, 'attendanceNextdate'])->name('attendance_nextdate');
Route::get('/attendance_beforedate', [WorkController::class, 'attendanceBeforedate'])->name('attendance_beforedate');



//ユーザー一覧ページ
Route::get('/user', [UserController::class, 'index'])->middleware('auth')->name('user.index');
//ユーザーごとの勤怠表が見れるページ
Route::get('/user/show/{id}', [UserController::class, 'show'])->middleware('auth')->name('user.show');

require __DIR__ . '/auth.php';