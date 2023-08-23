<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\AdminCatAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\AdminCatRequest;
use App\Containers\ProfileSection\TestContainer\Actions\GetAllTestContainersAction;
use App\Containers\ProfileSection\TestContainer\UI\WEB\Requests\GetAllTestContainersRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminCatController extends WebController
{
    public function run(AdminCatRequest $request): View|Factory|Application
    {
        $result = app(AdminCatAction::class)->run();
        return View('profileSection@siteContainer::AdminCat', ['result' => $result]);
    }
}
