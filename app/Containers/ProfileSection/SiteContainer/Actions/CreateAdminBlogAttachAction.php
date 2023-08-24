<?php

namespace App\Containers\ProfileSection\SiteContainer\Actions;

use App\Containers\ProfileSection\SiteContainer\Models\Attach;
use App\Containers\ProfileSection\SiteContainer\Tasks\CreateAdminBlogAttachTask;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateAdminBlogAttachAction extends ParentAction
{

    public function run(array $data): Attach
    {
        unset($data['_token']);

        if (isset($data['path'])) {
            $destination = dirname(base_path()) . '/public_html/attach';
            if (!is_dir($destination)) {
                mkdir($destination, 0777, true);
            }
            $destination = $destination . '/';
            $file = $data['path'];
            $fileName = md5(rand(1111111, 99999999) . $file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
            $file->move($destination, $fileName);
            $data['path'] = $fileName;
        }

        return app(CreateAdminBlogAttachTask::class)->run($data);
    }
}
