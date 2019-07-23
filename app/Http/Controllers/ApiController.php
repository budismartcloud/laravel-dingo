<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 23/07/2019
 * Time: 8:23
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function all(Request $request)
    {

        $id = $request->get('id');
        $data = [
            ['nrp' => 1, 'name' => 'Pinky'],
            ['nrp' => 2, 'name' => 'Misabahul'],
            ['nrp' => 3, 'name' => 'Arvianti'],
            ['nrp' => 4, 'name' => 'Siti'],
            ['nrp' => 5, 'name' => 'Budi'],
        ];

        if(!is_null($id)){
            $data = $data[$id];
        }

        return response()->json($data);
    }
}
