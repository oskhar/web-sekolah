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
        if (!$request->expectsJson()) {
            // Mendapatkan url
            $url = $request->url();
            // Cek url yang dilindungi otentikasi
            if (Str::startsWith($url, url('/admin'))) {
                return route('login');
            }

            // Cek url yang dilindungi otentikasi
            if (Str::startsWith($url, url('/teacher'))) {
                return route('login');
            }
            // Cek url yang dilindungi otentikasi
            if (Str::startsWith($url, url('/student'))) {
                return route('login');
            }
        }
        return redirect()->route('home');
    }
}