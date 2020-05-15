<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $userRole = $request->user()->role->name;
        if ($userRole === $role || $userRole === 'Admin') {
            return $next($request);
        }
        else {
            return back()->with([
                'role_rejection' => 'В вас не має права, щоб здійснити цей запит.'
            ]);
        }
        
    }
}
