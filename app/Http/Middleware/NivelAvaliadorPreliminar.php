<?php

namespace App\Http\Middleware;

use Closure;

class NivelAvaliadorPreliminar
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
        if(auth()->user->nivel == User::NIVEL_AVALIADOR_PRELIMINAR){
            return $next($request);
        }

        auth()->logout();
        return  redirect('/login');
    }
}
