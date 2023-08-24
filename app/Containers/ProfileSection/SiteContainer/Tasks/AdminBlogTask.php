<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\BlogRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class AdminBlogTask extends ParentTask
{
    public function __construct(
        protected BlogRepository $repository
    ) {
    }


    /**
     * @return mixed
     */
    public function run(): mixed
    {
        return $this->repository->getAll();
    }
}
