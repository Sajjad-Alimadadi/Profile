<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\DeleteAdminBlogAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\DeleteAdminBlogRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteAdminBlogController extends WebController
{
    public function run(DeleteAdminBlogRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteAdminBlogAction::class)->run($data);
        return redirect('/admin/blog')->with('result', 'حذف با موفقیت انجام شد');
    }
}
