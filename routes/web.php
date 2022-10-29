<?php

use Illuminate\Support\Facades\Route;


// Front Controller Route
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;









// Admin Controller Route

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminHomePageController;




// Route::get('/', function () {
//     return view('welcome');
// });



/* Front route */

// home page route

Route::get('/', [HomeController::class, 'index'])->name('home');

// about page route

Route::get('/about', [AboutController::class, 'index'])->name('about');























/* Admin route */

// Admin login route

Route::get('admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('admin/logout', [AdminLoginController::class, 'admin_logout'])->name('admin_logout');
Route::get('admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

// Admin profile route

Route::get('admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit')->middleware('admin:admin');

/* Admin route Home Page*/

// Admin Banner route

Route::get('admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner')->middleware('admin:admin');
Route::post('admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update')->middleware('admin:admin');

// Admin About route

Route::get('admin/home-about', [AdminHomePageController::class, 'about'])->name('admin_home_about')->middleware('admin:admin');
Route::post('admin/home-about-update', [AdminHomePageController::class, 'about_update'])->name('admin_home_about_update')->middleware('admin:admin');



