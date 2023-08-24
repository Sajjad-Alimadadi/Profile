<?php

namespace App\Containers\ProfileSection\SiteContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Attach extends ParentModel
{
    public $timestamps = false;
    protected $table = 'attachs';
    protected $fillable = [
        'id',
        'blog_id',
        'path',
    ];

    protected string $resourceKey = 'attachs';
}
