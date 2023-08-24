<?php

namespace App\Containers\ProfileSection\SiteContainer\Data\Repositories;

use App\Containers\ProfileSection\SiteContainer\Models\blog;
use App\Containers\ProfileSection\SiteContainer\Models\Cat;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

class BlogRepository extends ParentRepository
{
    public function getAll(): mixed
    {
        $result['blog'] = Blog::query()->get();
        $result['cat'] = Cat::query()->get();
        return $result;
    }
}
