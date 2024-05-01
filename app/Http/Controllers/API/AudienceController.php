<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Audience;
use App\Models\Qr;
use App\Models\Spinbottle;
use Illuminate\Http\Request;

/**
 * SaranController
 */
class AudienceController extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // $data = ModelsSpinbottleSetup::findOrFail(1);
        // return response()->json([
        //     "response" => [
        //         "status"    => 200,
        //         "message"   => "Success"
        //     ],
        //     "data" => $data
        // ], 200);
    }

    public function store(Request $request)
    {
        $data = Qr::where('status_qr','Active')->where('unicode', $request->get('id'))->first();
     
        if($data){
            $check_data = Audience::where('qr_id',  $data->id)->first();
            
            if($check_data){
                Audience::where('qr_id', $data->id)->update([
                    'play' => $check_data->play + 1,
                ]);
            }else{
                Audience::create([
                    'qr_id' =>  $data->id,
                    'play' => 1,
                ]);
            }

            Qr::where('id', $data->id)->update([
                'scan' => $data->scan + 1,
                'total_audience' => $data->total_audience + 1,
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
