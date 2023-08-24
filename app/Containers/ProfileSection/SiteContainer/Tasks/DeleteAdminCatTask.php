<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\CatRepository;
use App\Containers\ProfileSection\SiteContainer\Models\Cat;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;

class DeleteAdminCatTask extends ParentTask
{
    public function __construct(
        protected CatRepository $repository
    ) {
    }


    /**
     * @param $id
     * @return int|string
     * @throws NotFoundException
     * @throws ValidationException
     */
    public function run($id): int|string
    {
        try {
            return Cat::query()->where('id', $id)->delete();
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw ValidationException::withMessages(['cat' => 'لطفا ابتدا پست های این دسته بندی را حذف نمایید']);
        }
    }
}
