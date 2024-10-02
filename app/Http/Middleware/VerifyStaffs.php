<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Policies\UserPolicy;

class VerifyStaffs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null): Response
    {
        if (Auth::guard($guard)->user()->can(UserPolicy::MODERATOR, User::class))
        {
            return $next($request);
        }
        throw new HttpException(403, 'Forbidden');
    }
}
