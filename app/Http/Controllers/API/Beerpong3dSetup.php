<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Beerpong3dSetup as ModelsBeerpongSetup;
// use Illuminate\Http\Request;

/**
 * SaranController
 */
class Beerpong3dSetup extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $data = ModelsBeerpongSetup::findOrFail(1);
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "Success"
            ],
            "data" => $data
        ], 200);
    }

}
