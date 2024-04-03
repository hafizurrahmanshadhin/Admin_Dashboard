<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.layouts.login')->name('login');
Route::view('/register', 'auth.layouts.register')->name('register');
Route::view('/send_otp', 'auth.layouts.send_otp')->name('send_otp');
Route::view('/verify_otp', 'auth.layouts.verify_otp')->name('verify_otp');
Route::view('/reset_password', 'auth.layouts.reset_password')->name('reset_password');

Route::view('/admin', 'backend.layouts.admin.index')->name('admin');
