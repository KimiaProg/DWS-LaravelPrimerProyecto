<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'payment/*',  // exclude all URLs wit payment/ prefix
        'libros/realizarCreate', // exclude exact URL
        'libros/realizarUpdate', // exclude exact URL
        'editorial/realizarCreate'
    ];
}
