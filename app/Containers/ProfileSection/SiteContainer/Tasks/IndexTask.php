<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Models\Cat;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class IndexTask extends ParentTask
{
    public function __construct(
//        protected IndexRepository $repository
    )
    {
    }


    /**
     * @return mixed
     * @throws NotFoundException
     */
    public function run(): mixed
    {
        try {
            $result['cat'] = Cat::query()->with(['blog'])->orderBy('id', 'DESC')->get();
            return $result;
        } catch (Exception $e) {
            throw new NotFoundException();
        }
    }
}
