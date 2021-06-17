<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;
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

Route::get('/', [AppointmentsController::class, 'index'])->name('home');
Route::post('/appointments', [AppointmentsController::class, 'appointment'])->name('appointment');
Route::post('/store', [AppointmentsController::class, 'store'])->name('appointment.store');
Route::get('/dashboard', [AppointmentsController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::post('/dashboard/store', [AppointmentsController::class, 'dashstore'])->middleware(['auth'])->name('dashboard.store');
require __DIR__.'/auth.php';
