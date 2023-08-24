<?php

namespace App\Containers\ProfileSection\SiteContainer\Data\Repositories;

use App\Containers\ProfileSection\SiteContainer\Models\Attach;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Illuminate\Database\Eloquent\Collection;

class AttachRepository extends ParentRepository
{
    public function getAll($id): Collection|array
    {
        $result = Attach::query()->where('blog_id', $id)->get();
        return $result;
    }
}
