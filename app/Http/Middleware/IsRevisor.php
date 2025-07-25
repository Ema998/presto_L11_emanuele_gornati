<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsRevisor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('livewire/*')) {
            return $next($request);
        }
        
        if(Auth::check() && Auth::user()->is_revisor) {
            return $next($request);
        }
        return redirect()->route('homepage')->with('error', 'Accesso negato.');
    }
}
