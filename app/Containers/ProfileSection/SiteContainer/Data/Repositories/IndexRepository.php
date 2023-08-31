<?php

namespace App\Containers\ProfileSection\SiteContainer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class IndexRepository extends ParentRepository
{
    protected $fieldSearchable = [];

//    public function getParam($columns = ['*']): mixed
//    {
//       return DB::table('sliders')->get();
//    }
}
