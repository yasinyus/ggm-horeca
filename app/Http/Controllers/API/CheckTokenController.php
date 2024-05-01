<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Qr;
use Illuminate\Http\Request;

// use Illuminate\Http\Request;

/**
 * SaranController
 */
class CheckTokenController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $data = Qr::where('status_qr','Active')->where('unicode', $request->get('id'))->first();

        if($data){
            return response()->json([
                "response" => [
                    "status"    => 200,
                    "message"   => True
                ],
            ], 200);
        } else {
            return response()->json([
                "response" => [
                    "status"    => 404,
                    "message"   => False
                ],
            ], 404);
        }
    }

}
