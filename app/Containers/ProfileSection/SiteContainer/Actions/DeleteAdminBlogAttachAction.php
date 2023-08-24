<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Tasks\DeleteAdminBlogAttachTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteAdminBlogAttachAction extends ParentAction
{


    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int
    {
        return app(DeleteAdminBlogAttachTask::class)->run($array['id']);
    }
}
