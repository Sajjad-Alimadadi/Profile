<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\AdminBlogAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\AdminBlogRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminBlogController extends WebController
{
    public function run(AdminBlogRequest $request): View|Factory|Application
    {
        $result = app(AdminBlogAction::class)->run();
        return View('profileSection@siteContainer::AdminBlog', ['result' => $result]);
    }
}
