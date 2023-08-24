<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\BlogRepository;
use App\Containers\ProfileSection\SiteContainer\Models\Blog;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;

class DeleteAdminBlogTask extends ParentTask
{
    public function __construct(
        protected BlogRepository $repository
    ) {
    }


    /**
     * @param $id
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): int
    {
        try {
            $result = Blog::query()->where('id', $id)->get()->first();
            $file = dirname(base_path()) . '/public_html/cover/' . $result['cover'];
            File::delete($file);
            return Blog::query()->where('id', $id)->delete();
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw ValidationException::withMessages(['blog' => 'لطفا ابتدا ضمیمه های این پست را حذف نمایید']);
        }
    }
}
