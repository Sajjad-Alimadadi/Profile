<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\AdminBlogAttachController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/blog/attach/{id}', [AdminBlogAttachController::class, 'run'])->middleware(['check.admin']);
