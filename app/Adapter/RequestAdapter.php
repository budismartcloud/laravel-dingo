<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 23/07/2019
 * Time: 8:26
 */

namespace App\Adapter;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RequestAdapter extends GenericAdapter
{
    public function postData($targetUrl, $params)
    {
        $request = Request::create($targetUrl, 'POST', $params);
        $response = json_decode(Route::dispatch($request)->getContent());
        return $response;
    }

    public function getData($targetUrl)
    {
        $dispatcher = app('Dingo\Api\Dispatcher');
        $response = $dispatcher->version('v1')->get($targetUrl);
        return $response;
    }
}
