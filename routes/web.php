<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AppointmentStatController;
use App\Http\Controllers\MedHistoryController;
use App\Http\Controllers\AppRequestController;
use App\Http\Controllers\AppCheckupController;
use App\Http\Controllers\PatientRecordController;
use App\Http\Controllers\UserListController;

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


Route::middleware('guest')->group(function () {
  //landing page
  Route::get('/', [LandingpageController::class, 'index'])->name('landing-page');
  //login
  Route::get('/login', [LoginController::class, 'login'])->name('login');
  //verify
  Route::post('/verify', [LoginController::class, 'verify'])->name('auth.verify');
  //signup
  Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
});

Route::middleware('auth')->group(function () {
  //dashboard
  Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
  //book-appointment
  Route::controller(AppointmentController::class)->prefix('book-appointment')->group(function () {
    Route::get('/create', 'create')->name('appointment.create');
    Route::post('/store', 'store')->name('appointment.store');
  });
  //appointment status
  Route::get('/appointment-status', [AppointmentStatController::class, 'index'])->name('app-stat.index');
  //medical history
  Route::get('/medical-history', [MedHistoryController::class, 'index'])->name('med-history.index');
  //appointment request
  Route::get('/appointment-request', [AppRequestController::class, 'index'])->name('app-request.index');
  //appointment checkup
  Route::get('/appointment-checkup', [AppCheckupController::class, 'index'])->name('app-checkup.index');
  //patient record
  Route::get('/patient-record', [PatientRecordController::class, 'index'])->name('patient-record.index');
  //user list
  Route::get('/user-list', [UserListController::class, 'index'])->name('user-list.index');
});
