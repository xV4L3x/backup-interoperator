<?php

namespace XV4L3X\BackupInteroperator\Http\Middleware;

use Closure;

class BasicAuth {
    public function handle($request, Closure $next)
    {
        $username = config('backup-interoperator.auth.username');
        $password = config('backup-interoperator.auth.password');

        if ($request->getUser() !== $username || $request->getPassword() !== $password) {
            return response('Unauthorized', 401)->header('WWW-Authenticate', 'Basic');
        }

        return $next($request);
    }
}