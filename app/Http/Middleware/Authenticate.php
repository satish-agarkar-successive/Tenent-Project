<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {

        // if login has happened and session is active then , http / middleware / RedirectIfAuthenticated controller is called

        if (! $request->expectsJson()) {
            return route('login'); // this is for ->name('login');
        }



    }
}
