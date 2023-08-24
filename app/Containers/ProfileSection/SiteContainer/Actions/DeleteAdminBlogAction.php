<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Tasks\DeleteAdminBlogTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteAdminBlogAction extends ParentAction
{


    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteAdminBlogTask::class)->run($array['id']);
    }
}
