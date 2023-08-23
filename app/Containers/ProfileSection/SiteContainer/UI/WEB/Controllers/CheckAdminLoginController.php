<?php

namespace App\Containers\ProfileSection\SiteContainer\UI\WEB\Controllers;

use App\Containers\ProfileSection\SiteContainer\Actions\CheckAdminLoginAction;
use App\Containers\ProfileSection\SiteContainer\UI\WEB\Requests\CheckAdminLoginRequest;
use App\Ship\Parents\Controllers\WebController;

class CheckAdminLoginController extends WebController
{

    public function run(CheckAdminLoginRequest $request)
    {
        $data = $request->sanitizeInput([
            '_token' => $request->post('_token'),
            'user'   => $request->post('user'),
            'pass'   => $request->post('pass'),
        ]);
        $result = app(CheckAdminLoginAction::class)->run($data);
        return redirect()->route('AdminLogin')->with('result', $result);
    }
}
