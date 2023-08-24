<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\BlogRepository;
use App\Containers\ProfileSection\SiteContainer\Models\Blog;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateAdminBlogTask extends ParentTask
{
    public function __construct(
        protected BlogRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Blog
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $e) {
            throw new CreateResourceFailedException();
        }
    }
}
