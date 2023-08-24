<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\AttachRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class AdminBlogAttachTask extends ParentTask
{
    public function __construct(
        protected AttachRepository $repository
    ) {
    }


    /**
     * @return mixed
     */
    public function run(array $array): mixed
    {
        return $this->repository->getAll($array['id']);
    }
}
