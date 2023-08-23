<?php

use App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'run']);
//    ->middleware(['auth:web']);

