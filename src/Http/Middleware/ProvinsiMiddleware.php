<?php namespace Bantenprov\Provinsi\Http\Middleware;

use Closure;

/**
 * The ProvinsiMiddleware class.
 *
 * @package Bantenprov\Provinsi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProvinsiMiddleware
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
        return $next($request);
    }
}
