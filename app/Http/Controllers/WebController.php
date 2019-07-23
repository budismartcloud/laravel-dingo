<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 23/07/2019
 * Time: 8:26
 */

namespace App\Http\Controllers;


use App\Adapter\RequestAdapter;
use Illuminate\Support\Facades\Request;

class WebController extends Controller
{
    private $requestAdapter;

    public function __construct()
    {
        $this->requestAdapter = new RequestAdapter();
    }

    public function index(\Illuminate\Http\Request $req)
    {
        $id = $req->get('id');
        $targetUrl = "api/mahasiswa?id=".$id;
        $request = $this->requestAdapter->getData($targetUrl);
        dd($request);
    }
}
