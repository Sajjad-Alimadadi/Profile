<?php

namespace App\Ship\Middlewares;

use Apiato\Core\Middlewares\Http\Authenticate as CoreMiddleware;
use Closure;
use Illuminate\Support\Facades\Cache;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware extends CoreMiddleware
{
    #[NoReturn] public function handle($request, Closure $next, ...$guards)
    {
//        Cache::clear();
        $adminCache = Cache::get('admin');
        $id = $adminCache ? $adminCache['id'] : null;
        if (is_null($id)) {
//            return response('Unauthorized Access', Response::HTTP_FORBIDDEN);
            abort(Response::HTTP_FORBIDDEN);
        }
        return $next($request);
    }
}
