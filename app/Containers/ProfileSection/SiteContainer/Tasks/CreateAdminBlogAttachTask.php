<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\AttachRepository;
use App\Containers\ProfileSection\SiteContainer\Models\Attach;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateAdminBlogAttachTask extends ParentTask
{
    public function __construct(
        protected AttachRepository $repository
    ) {
    }


    /**
     * @param array $data
     * @return Attach
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Attach
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
