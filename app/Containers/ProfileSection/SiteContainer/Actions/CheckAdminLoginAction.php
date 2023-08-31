<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Tasks\CheckAdminLoginTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CheckAdminLoginAction extends ParentAction
{

    /**
     * @param array $data
     * @return int|bool
     */
    public function run(array $data): int|bool
    {
        unset($data['_token']);
        $data['pass'] = sha1($data['pass']);
        return app(CheckAdminLoginTask::class)->run($data);
    }
}
