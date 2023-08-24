<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\DeleteAdminBlogController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/blog/delete/{id}', [DeleteAdminBlogController::class, 'run'])->middleware(['check.admin']);

