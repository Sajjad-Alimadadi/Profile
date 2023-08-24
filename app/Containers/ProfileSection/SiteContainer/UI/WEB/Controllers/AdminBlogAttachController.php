<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\AdminBlogAttachAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\AdminBlogAttachRequest;
use App\Ship\Parents\Controllers\WebController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminBlogAttachController extends WebController
{
    public function run(AdminBlogAttachRequest $request): View|Factory|Application
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(AdminBlogAttachAction::class)->run($data);
        return View('profileSection@siteContainer::AdminBlogAttach', ['result' => $result]);
    }
}
