<?php

namespace App\Containers\ProfileSection\SiteContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Admin extends ParentModel
{
    public $timestamps = false;
    protected $table = 'admins';
    protected $fillable = [
        'id',
        'name',
        'family',
        'user',
        'pass',
    ];

    protected string $resourceKey = 'admins';
}
