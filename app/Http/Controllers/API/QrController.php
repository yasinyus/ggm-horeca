<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Qr;
use Illuminate\Http\Request;

// use Illuminate\Http\Request;

/**
 * SaranController
 */
class QrController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $datas = Qr::where('status_qr','Active')->where('unicode', $request->get('id'))->first();

        
        $id = $request->get('id');
        $data = Qr::leftjoin('teams', 'teams.id', '=', 'qrs.team_id')
                    ->leftjoin('campaigns', 'campaigns.id', '=', 'qrs.campaign_id')
                    ->select('*', 'qrs.id as edit_id')
                    ->where('status_qr','Active')
                    ->where('unicode', $id)->get();
        if($datas){
            return response()->json([
                "response" => [
                    "status"    => 200,
                    "message"   => True
                ],
                "data" => $data
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
