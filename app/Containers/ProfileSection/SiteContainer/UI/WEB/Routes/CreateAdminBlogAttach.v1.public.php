<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\CreateAdminBlogAttachController;
use Illuminate\Support\Facades\Route;

Route::Post('/admin/blog/attach/create', [CreateAdminBlogAttachController::class, 'run'])->middleware(['check.admin']);
