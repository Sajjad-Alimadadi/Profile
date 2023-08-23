<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\TestContainer\Actions\GetAllTestContainersAction;
use App\Containers\ProfileSection\TestContainer\UI\WEB\Requests\GetAllTestContainersRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminDashboardController extends WebController
{
    public function run(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('profileSection@siteContainer::AdminDashboard');
    }
}
