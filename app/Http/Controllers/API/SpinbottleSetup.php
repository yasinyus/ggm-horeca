<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Qr;
use App\Models\Spinbottle;
use App\Models\SpinbottleSetup as ModelsSpinbottleSetup;
use Illuminate\Http\Request;

/**
 * SaranController
 */
class SpinbottleSetup extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $data = ModelsSpinbottleSetup::findOrFail(1);
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "Success"
            ],
            "data" => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $data = Qr::where('status_qr','Active')->where('unicode', $request->get('id'))->first();
     
        if($data){
            $check_data = Spinbottle::where('qr_id',  $data->id)->first();
            
            if($check_data){
                Spinbottle::where('qr_id', $data->id)->update([
                    'total_play' => $check_data->total_play + 1,
                ]);
            }else{
                Spinbottle::create([
                    'qr_id' =>  $data->id,
                    'total_play' => 1,
                ]);
            }

            Qr::where('id', $data->id)->update([
                'scan' => $data->scan + 1,
                'total_spinbottle' => $data->total_spinbottle + 1,
            ]);

            return response()->json([
                "response" => [
                    "status"    => 200,
                    "message"   => "Success"
                ]
            ], 200);
        } else {
            return response()->json([
                "response" => [
                    "status"    => 404,
                    "message"   => "Id Not Found"
                ]
            ], 404);
        }
       
    }

}
