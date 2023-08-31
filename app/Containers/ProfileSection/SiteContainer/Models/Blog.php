<?php

namespace App\Containers\ProfileSection\SiteContainer\Models;

use App\Containers\LabSection\DoctorContainer\Models\Doctor;
use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends ParentModel
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

    public function cat(): BelongsTo
    {
        return $this->belongsTo(Cat::class, 'cat_id');
    }
}
