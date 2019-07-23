<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 23/07/2019
 * Time: 8:32
 */

namespace App\Http\Middleware;
use Dingo\Api\Http\InternalRequest;


class ApiInternalRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        // handle the api request
        $response = $next($request);

        // check if the api request is internal and package the response
        if($request instanceof InternalRequest) {
            return response($response->getOriginalContent());
        }

        // otherwise return the response
        return $response;
    }
}
