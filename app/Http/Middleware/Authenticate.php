<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Str;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    // Add new method
    // protected function unauthenticated($request, array $guards)
    // {
    //     $header = $request->server('HTTP_AUTHORIZATION');
    //     if (Str::startsWith($header, 'Bearer ')) {
    //         $token = Str::substr($header, 7);
    //         abort(response()->json(
    //             [
    //                 'status' => 'error',
    //                 'message' => 'Invalid token.',
    //             ],
    //             401
    //         ));
    //     }
    //     if ($request->is('api/*') || $request->is('vendor/*')) {
    //         abort(response()->json([
    //             'status' => 'error',
    //             'message' => 'Unauthenticated.',
    //         ], 401));
    //     } else {
    //         return redirect('/login');
    //     }
    // }
}
