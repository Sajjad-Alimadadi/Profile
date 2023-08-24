<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\DeleteAdminBlogAttachAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\DeleteAdminBlogAttachRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteAdminBlogAttachController extends WebController
{
    public function run(DeleteAdminBlogAttachRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteAdminBlogAttachAction::class)->run($data);
        return redirect()->back()->with('result', 'حذف با موفقیت انجام شد');
    }
}
