<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\SignoutAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/signout', [SignoutAdminController::class, 'run'])->middleware(['check.admin']);
