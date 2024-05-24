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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('patients', \App\Http\Controllers\PatientController::class);
Route::resource('vital_parameters', \App\Http\Controllers\VitalParameterController::class);
Route::resource('messaging', \App\Http\Controllers\MessagingController::class);
Route::resource('feedbacks', \App\Http\Controllers\SpecialistFeedbackController::class);
Route::resource('referrals', \App\Http\Controllers\ReferralCaseController::class);
