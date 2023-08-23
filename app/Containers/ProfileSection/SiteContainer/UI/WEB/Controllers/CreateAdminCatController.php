<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\CreateAdminCatAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\CreateAdminCatRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateAdminCatController extends WebController
{
    public function run(CreateAdminCatRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'name'   => $request->post('name'),
        ]);
        $result = app(CreateAdminCatAction::class)->run($data);
        return redirect('/admin/cat')->with('result', 'ثبت با موفقیت انجام شد');
    }
}
