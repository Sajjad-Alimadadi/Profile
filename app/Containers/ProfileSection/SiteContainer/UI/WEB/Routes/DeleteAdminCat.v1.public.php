<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\DeleteAdminCatController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/cat/delete/{id}', [DeleteAdminCatController::class, 'run'])->middleware(['check.admin']);
