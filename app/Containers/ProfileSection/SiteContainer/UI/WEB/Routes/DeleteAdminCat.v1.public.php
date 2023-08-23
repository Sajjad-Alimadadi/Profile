<?php

use Illuminate\Support\Facades\Route;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\DeleteAdminCatController;

Route::get('/admin/cat/delete/{id}', [DeleteAdminCatController::class, 'run'])->middleware(['check.admin']);
