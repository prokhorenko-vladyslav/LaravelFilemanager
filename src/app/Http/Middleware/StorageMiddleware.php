<?php

namespace Laurel\FileManager\App\Http\Middleware;

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
        Storage::setCurrentStorage(1);
        if (!Storage::storageExists()) {
            return abort(404);
        }
        $storage = app(Storage::findById()->class);
        dd($storage);
        return $next($request);
    }
}
