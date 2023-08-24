<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\CreateAdminBlogController;
use Illuminate\Support\Facades\Route;

Route::Post('/admin/blog/create', [CreateAdminBlogController::class, 'run'])->middleware(['check.admin']);
