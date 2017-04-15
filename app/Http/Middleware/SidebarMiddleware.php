<?php

namespace App\Http\Middleware;

use Closure;

class SidebarMiddleware
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

           $next =  DB::select("SELECT * FROM mudate24bd.recursiva where rec_nemonico = 'SER' or rec_nemonico ='TSE' ORDER BY rec_nemonico, rec_detalle;");
           die($next);

        return $next($request);
    }
}
