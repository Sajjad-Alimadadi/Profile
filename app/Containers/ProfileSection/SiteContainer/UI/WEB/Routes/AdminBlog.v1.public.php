<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\AdminBlogController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/blog', [AdminBlogController::class, 'run'])->middleware(['check.admin']);
