<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\AdminRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

class AdminCatTask extends ParentTask
{
    public function __construct(
        protected AdminRepository $repository
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
