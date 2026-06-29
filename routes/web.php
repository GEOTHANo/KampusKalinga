<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');

// Temporarily no auth middleware so we can preview the design
Route::view('dashboard', 'dashboard')->name('dashboard');
Route::view('incidents', 'incidents')->name('incidents');
Route::view('report-incident', 'report-incident')->name('report-incident');
Route::view('users', 'users')->name('users');
Route::view('offices', 'offices')->name('offices');
Route::view('campus-map', 'campus-map')->name('campus-map');
Route::view('analytics', 'analytics')->name('analytics');
Route::view('settings', 'settings')->name('settings');

// require __DIR__.'/settings.php'; // Temporarily disabled — needs auth/db
