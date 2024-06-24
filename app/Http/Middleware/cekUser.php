<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class cekUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user()->hak_akses;
        if (Auth::user()->hak_akses == 'user') {
            // Jika bukan admin, redirect atau berikan respons sesuai kebutuhan Anda
            return $next($request);
        }else{
            abort(401);
        }
    }
}
