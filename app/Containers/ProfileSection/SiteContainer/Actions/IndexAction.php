<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\LabSection\SiteContainer\Tasks\IndexSiteTask;
use App\Containers\ProfileSection\SiteContainer\Tasks\IndexTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class IndexAction extends ParentAction
{

    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return app(IndexTask::class)->run();
    }
}
