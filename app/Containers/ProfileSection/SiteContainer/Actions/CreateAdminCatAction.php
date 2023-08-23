<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Models\Cat;
use App\Containers\ProfileSection\SiteContainer\Tasks\CreateAdminCatTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateAdminCatAction extends ParentAction
{

    /**
     * @param array $data
     * @return Cat
     */
    public function run(array $data): Cat
    {
        return app(CreateAdminCatTask::class)->run($data);
    }
}
