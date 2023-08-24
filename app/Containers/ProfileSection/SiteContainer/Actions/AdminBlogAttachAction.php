<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Tasks\AdminBlogAttachTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class AdminBlogAttachAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(array $array): mixed
    {
        return app(AdminBlogAttachTask::class)->run($array);
    }
}
