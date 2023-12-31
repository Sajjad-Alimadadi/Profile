<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Tasks\AdminCatTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class AdminCatAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(AdminCatTask::class)->run();
    }
}
