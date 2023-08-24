<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\DeleteAdminBlogAttachController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/blog/attach/delete/{id}', [DeleteAdminBlogAttachController::class, 'run'])->middleware(['check.admin']);
