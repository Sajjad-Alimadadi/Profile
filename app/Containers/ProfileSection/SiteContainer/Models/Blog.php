<?php

namespace App\Containers\ProfileSection\SiteContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class blog extends ParentModel
{
    public $timestamps = false;
    protected $table = 'blogs';
    protected $fillable = [
        'id',
        'cat_id',
        'subject',
        'text',
        'cover',
        'is_protect',
    ];

    protected string $resourceKey = 'blogs';
}
