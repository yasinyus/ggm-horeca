<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Filter;
use App\Models\Qr;
use Illuminate\Http\Request;

// use Illuminate\Http\Request;

/**
 * SaranController
 */
class FilterPhoto extends Controller
{

    /**
     * index
     *
     * @return void
     */
    public function index(Request $request)
    {
        $datas = Qr::where('status_qr','Active')->where('unicode', $request->get('id'))->first();

        
        if($datas){
            $cek = Filter::where('status_filter','Active')->where('qr_id', $datas->id)->first();
            $data = Filter::where('status_filter','Active')->where('qr_id', $datas->id)->get();
            if($cek){
                return response()->json([
                    "response" => [
                        "status"    => 200,
                        "message"   => 'Success'
                    ],
                    "data" => $data
                ], 200);
            } else {
                return response()->json([
                    "response" => [
                        "status"    => 404,
                        "message"   => "Not Found"
                    ],
                ], 404);
            }
            
        } else {
            return response()->json([
                "response" => [
                    "status"    => 404,
                    "message"   => "Not Found"
                ],
            ], 404);
        }
    }

    public function store(Request $request)
    {
        $data = Qr::where('status_qr','Active')->where('unicode', $request->get('id'))->first();
     
        if($data){
            $check_data = Filter::where('qr_id',  $data->id)->first();
            
            if($check_data){
                Filter::where('qr_id', $data->id)->update([
                    'play' => $check_data->play + 1,
                ]);

                Qr::where('id', $data->id)->update([
                    'scan' => $data->scan + 1,
                    'total_filter' => $data->total_filter + 1,
                ]);
    
                return response()->json([
                    "response" => [
                        "status"    => 200,
                        "message"   => "Success"
                    ]
                ], 200);
            }else{
                return response()->json([
                    "response" => [
                        "status"    => 404,
                        "message"   => "Id Not Found"
                    ]
                ], 404);
            }
 
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
