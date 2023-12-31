<?php

namespace App\Containers\ProfileSection\SiteContainer\Data\Repositories;

use App\Containers\ProfileSection\SiteContainer\Models\Admin;
use App\Containers\ProfileSection\SiteContainer\Models\Cat;
use App\Ship\Parents\Repositories\Repository as ParentRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class AdminRepository extends ParentRepository
{
    public function CheckForLoginAdmin(array $data): int|bool
    {
        $info = Admin::query()->where(['user' => $data['user'], 'pass' => $data['pass']])->first();
        $result = Admin::query()->where(['user' => $data['user'], 'pass' => $data['pass']])->get()->count();
        if ($result === 1) {
            Cache::put('admin', ['user' => $info['user'], 'id' => $info['id']], Carbon::now()->addDay(1));
            session::put('admin', $info['id']);
        }
        return $result;
    }

    public function getAll(): mixed
    {
        return Cat::query()->get();
    }
}
