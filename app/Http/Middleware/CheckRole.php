<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Role;
use App\Models\User;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if ($role == 'admin' && auth()->user()->role_id != Role::NV1){
            abort(403, 'Unauthorized action.');
        }
        if ($role == 'director' && auth()->user()->role_id > Role::NV2){
            abort(403, 'Unauthorized action.');
        }
        if ($role == 'sellers' && auth()->user()->role_id > Role::NV3){
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
