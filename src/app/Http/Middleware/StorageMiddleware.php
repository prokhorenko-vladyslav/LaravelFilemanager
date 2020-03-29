<?php

namespace Laurel\FileManager\App\Http\Middleware;

use Laurel\FileManager\App\LaurelFM;
use Laurel\FileManager\App\Models\Storage;
use Closure;

class StorageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        LaurelFM::instance()->setCurrentStorage(12);
        dd(LaurelFM::instance()->getCurrentStorage());
        return $next($request);
    }
}
