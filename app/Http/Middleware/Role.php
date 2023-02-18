<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure(Request): (Response) $next
     * @param $role
     * @return mixed|never|Response
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->user()->role != ($role) && auth()->user()->role != 'admin') {
            App::abort(404, 'Page not found');
        }

        return $next($request);
    }
}
