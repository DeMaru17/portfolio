<?php

use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');


Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
Route::resource('profil', \App\Http\Controllers\ProfilController::class);
Route::resource('education', \App\Http\Controllers\EducationController::class);
Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
Route::resource('skill', \App\Http\Controllers\SkillController::class);
Route::resource('certification', \App\Http\Controllers\CertificationController::class);
