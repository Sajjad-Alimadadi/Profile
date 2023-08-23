<?php

use App\Containers\ProfileSection\TestContainer\UI\WEB\Controllers\GetAllTestContainersController;
use Illuminate\Support\Facades\Route;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\AdminLoginController;

Route::get('/admin/login', [AdminLoginController::class, 'run'])->name('AdminLogin');
//    ->middleware(['auth:web']);

