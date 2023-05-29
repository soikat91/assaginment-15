<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class GlobalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('RequestMethodUrlLog: ' . $request->method() . ' ' . $request->fullUrl());
        return $next($request);

        
        // $key=$request->header('api-key');

        // if($key=="123"){
        //     return $next($request);
        // }else{
        //     return response()->json('failed',401);
        // }

       
    }
}
