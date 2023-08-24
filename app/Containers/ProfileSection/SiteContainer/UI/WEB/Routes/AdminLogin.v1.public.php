<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/login', [AdminLoginController::class, 'run'])->name('AdminLogin');

