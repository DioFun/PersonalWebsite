<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->get('user')) return abort(404);
        $user = User::where([
            "mail" => $request->session()->get('user')['email']
        ])->firstOrFail();
        if (!$user->admin || Crypt::decryptString($user->connection_token) != $request->session()->get('user')['connection_token']) return abort(404);
        return $next($request);
    }
}
