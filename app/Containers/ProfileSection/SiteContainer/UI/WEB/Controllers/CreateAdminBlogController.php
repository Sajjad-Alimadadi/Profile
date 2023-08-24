<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\CreateAdminBlogAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\CreateAdminBlogRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateAdminBlogController extends WebController
{
    public function run(CreateAdminBlogRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token'     => $request->post('_token'),
            'cat_id'     => $request->post('cat_id'),
            'subject'    => $request->post('subject'),
            'text'       => $request->post('text'),
            'cover'      => $request->post('cover'),
            'is_protect' => $request->post('is_protect'),
        ]);
        $result = app(CreateAdminBlogAction::class)->run($data);
        return redirect('/admin/blog')->with('result', 'ثبت با موفقیت انجام شد');
    }

}
