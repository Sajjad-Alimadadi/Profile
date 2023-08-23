<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\AdminCatController;
use Illuminate\Support\Facades\Route;

Route::get('admin/cat', [AdminCatController::class, 'run'])->middleware(['check.admin']);
