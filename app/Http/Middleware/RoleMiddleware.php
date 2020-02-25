<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class RoleMiddleware
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

        $id=auth()->user()->id;
    $user=User::find($id);
    foreach($user->roles as $role)

if ( $role->name=='administrator' ) {
    // $this->redirectTo = '/admin/dashboard1';
    return $next($request);

    // return $this->redirectTo;

}
return abort(403);
        // return $next($request);
    }
}
