<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Tasks\DeleteAdminCatTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteAdminCatAction extends ParentAction
{

    /**
     * @param array $array
     * @return int
     */
    public function run(array $array): int|string
    {
        return app(DeleteAdminCatTask::class)->run($array['id']);
    }
}
