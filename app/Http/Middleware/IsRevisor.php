<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsRevisor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // se l’utente è loggato e anche revisore 
        if (Auth::check() && Auth::user()->is_revisor) {
            // allora puà procedere alla richiesta
            return $next($request);
        }

        // altrimenti verrà reindirizzato sulla home con il messaggio di diniego    
        return redirect('/')->with('access.denied', 'Attenzione! Solo i revisori hanno accesso a quest\'area.');
    }
        
    // ! IMP.RICORDA CHE IL MIDDLEWARE IsRevisor deve essere impostato anche in app/http/Kernel
}
