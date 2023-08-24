<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class SignoutAdminController extends WebController
{
    public function run(): View|Factory|Application
    {
        Cache::clear();
        return View('profileSection@siteContainer::AdminLogin');
    }
}
