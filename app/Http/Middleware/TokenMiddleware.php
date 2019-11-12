<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class TokenMiddleware
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
        $token = $request->header('token');
        if(is_null($token)){
            return response()->json([
                'success' => 0,
                'message' => 'Token Unavailable'
            ], 401);
        }

        $user = User::where('token', $token)->first();

        if(is_null($user)){
            return response()->json([
                'success' => 0,
                'message' => 'Token Invalid'
            ], 401);
        }

        return $next($request);
    }
}
