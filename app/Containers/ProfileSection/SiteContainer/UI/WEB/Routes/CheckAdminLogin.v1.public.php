<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\CheckAdminLoginController;
use Illuminate\Support\Facades\Route;

Route::Post('/admin/login/check', [CheckAdminLoginController::class, 'run']);
//    ->middleware(['auth:web']);

