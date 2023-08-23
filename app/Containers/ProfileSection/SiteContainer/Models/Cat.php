<?php

namespace App\Containers\ProfileSection\SiteContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Cat extends ParentModel
{
    public $timestamps = false;
    protected $table = 'cats';
    protected $fillable = [
        'id',
        'name',
    ];

    protected string $resourceKey = 'cats';
}
