<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if ($user && ($user->is_admin == '2' || $user->is_admin == '3' || $user->is_admin == '4' )) {
            return $next($request);
        }
        
        // Return a response with 403 status code for unauthorized access
        abort(Response::HTTP_FORBIDDEN);
    }
}
