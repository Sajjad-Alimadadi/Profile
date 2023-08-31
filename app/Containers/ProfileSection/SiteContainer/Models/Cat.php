<?php

namespace App\Containers\ProfileSection\SiteContainer\Models;

use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cat extends ParentModel
{
    public $timestamps = false;
    protected $table = 'cats';
    protected $fillable = [
        'id',
        'name',
    ];
    protected string $resourceKey = 'cats';

    public function blog(): HasMany
    {
        return $this->HasMany(Blog::class, 'cat_id');
    }
}
