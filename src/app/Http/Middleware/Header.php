<?php

namespace Laurel\FileManager\App\Http\Middleware;

use Closure;

class Header
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
        header("Access-Control-Allow-Origin: http://localhost:8080");
        header("Access-Control-Allow-Methods: *");
        header("Access-Control-Allow-Headers: *");
        return $next($request);
    }
}
