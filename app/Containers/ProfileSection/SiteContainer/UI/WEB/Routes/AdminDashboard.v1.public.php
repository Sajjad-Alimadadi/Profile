<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', [AdminDashboardController::class, 'run'])->middleware(['check.admin']);
