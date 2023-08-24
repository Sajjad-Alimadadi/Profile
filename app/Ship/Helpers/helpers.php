<?php

/*
|--------------------------------------------------------------------------
| Ship Helpers
|--------------------------------------------------------------------------
|
| Write only general helper functions here.
| Container specific helper functions should go into their own related Containers.
| All files under app/{section_name}/{container_name}/Helpers/ folder will be autoloaded by Apiato.
|
*/
use App\Containers\ProfileSection\SiteContainer\Models\Cat;

if (!function_exists('toCatName')) {
    function toCatName(int $id): string
    {
        $result= Cat::query()->where('id', $id)->get()->first();
        return $result['name'];
    }
}
