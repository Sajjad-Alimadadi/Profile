<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\ProfileSection\SiteContainer\Tasks\AdminCatTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

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
