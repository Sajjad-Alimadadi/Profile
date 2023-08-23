<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\CreateAdminCatController;
use Illuminate\Support\Facades\Route;

Route::Post('/admin/cat/create', [CreateAdminCatController::class, 'run'])->middleware(['check.admin']);

