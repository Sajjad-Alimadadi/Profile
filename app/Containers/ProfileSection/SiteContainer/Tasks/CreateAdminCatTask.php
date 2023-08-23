<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\CatRepository;
use App\Containers\ProfileSection\SiteContainer\Models\Cat;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateAdminCatTask extends ParentTask
{
    public function __construct(
        protected CatRepository $repository
    ) {
    }


    /**
     * @param array $data
     * @return Cat
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Cat
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
