<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class, 'manageLoginview']);

Route::get('/ForgotPassword',[LoginController::class, 'manageForgotPasswordView']);

Route::get('/newRegister',[RegisterController::class, 'RegisterView']);

Route::get('/PlatinumHome',[LoginController::class, 'PlatinumHomePage']);

Route::get('/MentorHome',[LoginController::class, 'MentorHomePage']);

Route::get('/StaffHome',[LoginController::class, 'StaffHomePage']);


