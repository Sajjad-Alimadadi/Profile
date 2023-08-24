<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Tasks\AdminBlogTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class AdminBlogAction extends ParentAction
{


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(AdminBlogTask::class)->run();
    }
}
