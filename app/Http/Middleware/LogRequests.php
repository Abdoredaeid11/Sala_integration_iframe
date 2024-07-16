<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Log the request details
        Log::info('Request Details', [
            'method' => $request->getMethod(),
            'url' => $request->fullUrl(),
            'ip' => $request->ip(),
            'request_data' => $request->all(),
        ]);

        return $next($request);
    }
}
