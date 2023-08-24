<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Models\Blog;
use App\Containers\ProfileSection\SiteContainer\Tasks\CreateAdminBlogTask;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Validation\ValidationException;

class CreateAdminBlogAction extends ParentAction
{

    /**
     * @throws ValidationException
     */
    public function run(array $data): Blog
    {
        unset($data['_token']);

        if ($data['is_protect'] === "on") {
            $data['is_protect'] = 1;
        } else {
            $data['is_protect'] = 0;
        }

        if (isset($data['cover'])) {
            $destination = dirname(base_path()) . '/public_html/cover';
            if (!is_dir($destination)) {
                mkdir($destination, 0777, true);
            }
            $destination = $destination . '/';
            $file = $data['cover'];
            $fileName = md5(rand(1111111, 99999999) . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move($destination, $fileName);
            $data['cover'] = $fileName;
        }

        return app(CreateAdminBlogTask::class)->run($data);
    }
}
