<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\ProfileSection\SiteContainer\Data\Repositories\AdminRepository;
use App\Containers\ProfileSection\TestContainer\Data\Repositories\TestContainerRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

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
