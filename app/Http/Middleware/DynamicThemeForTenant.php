<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\View;

class DynamicThemeForTenant
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {

        if (tenant()) {
            View::addNamespace('theme', [
                resource_path('views/tenants/themes/tenant-' . tenant()->getKey()),
                resource_path('views/tenants/themes/default'),
            ]);
        }


        return $next($request);
    }
}
