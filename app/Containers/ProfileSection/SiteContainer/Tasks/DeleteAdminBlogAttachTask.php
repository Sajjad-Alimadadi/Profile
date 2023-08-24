<?php

namespace App\Containers\ProfileSection\SiteContainer\Tasks;

use App\Containers\ProfileSection\SiteContainer\Data\Repositories\AttachRepository;
use App\Containers\ProfileSection\SiteContainer\Models\Attach;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class DeleteAdminBlogAttachTask extends ParentTask
{
    public function __construct(
        protected AttachRepository $repository
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
            $result = Attach::query()->where('id', $id)->get()->first();
            $file = dirname(base_path()) . '/public_html/attach/' . $result['path'];
            File::delete($file);
            return Attach::query()->where('id', $id)->delete();
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
