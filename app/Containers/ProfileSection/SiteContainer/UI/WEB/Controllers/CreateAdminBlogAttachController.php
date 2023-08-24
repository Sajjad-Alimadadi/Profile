<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\CreateAdminBlogAttachAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\CreateAdminBlogAttachRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateAdminBlogAttachController extends WebController
{
    public function run(CreateAdminBlogAttachRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token'  => $request->post('_token'),
            'blog_id' => $request->post('blog_id'),
            'path'    => $request->file('path'),
        ]);
        $result = app(CreateAdminBlogAttachAction::class)->run($data);
        return redirect()->back()->with('result', 'ثبت ضمیمه با موفقیت انجام شد');
    }

}
