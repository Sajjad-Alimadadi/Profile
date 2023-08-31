<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\IndexAction;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class IndexController extends WebController
{
    public function run(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $result = app(IndexAction::class)->run();
        return view('profileSection@siteContainer::Index', ['result' => $result]);
    }
}
