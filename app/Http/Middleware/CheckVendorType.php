<?php

namespace App\Http\Middleware;

use App\VendorType;
use Closure;

class CheckVendorType
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
        $vendor_type = VendorType::first();
        if($vendor_type->vendor_status == 1){
            return $next($request);
        } else {
            abort(404);
        }
        
    }
}
