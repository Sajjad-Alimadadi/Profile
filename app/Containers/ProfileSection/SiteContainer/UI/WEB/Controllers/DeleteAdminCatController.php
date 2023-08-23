<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\DeleteAdminCatAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\DeleteAdminCatRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteAdminCatController extends WebController
{
    public function run(DeleteAdminCatRequest $request)
    {
        $data = $request->sanitizeInput([
            'id' => $request->route('id'),
        ]);
        $result = app(DeleteAdminCatAction::class)->run($data);
        return redirect('/admin/cat')->with('result', 'حذف با موفقیت انجام شد');
    }
}
