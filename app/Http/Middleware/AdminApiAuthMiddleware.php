<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AdminApiAuthMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) {
        try {
            if (Auth::guard('api')->check()) {
                return $next($request);
            }
            return response()->json(['error' => 'Unauthorized'], 403);
        } catch (JWTException $e) {
            if ($e instanceof TokenInvalidException) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
            if ($e instanceof TokenExpiredException) {
                return response()->json(['error' => 'Unauthorized'], 403);
            }
            return response()->json(['error' => 'Unauthorized'], 403);
        }
    }
}

