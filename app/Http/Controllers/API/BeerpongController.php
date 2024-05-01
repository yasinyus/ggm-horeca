<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Beerpong;
use App\Models\BeerpongUser;
use App\Models\Qr;
use Illuminate\Http\Request;

class BeerpongController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        
    }

    /**
     * show
     *
     * @param  mixed $slug
     * @return void
     */
    public function store(Request $request, Beerpong $beerpong)
    {
        $data = Qr::where('status_qr','Active')->where('unicode', $request->get('id'))->first();
     
        if($data){
            $store = BeerpongUser::create([
                'qr_id' =>  $data->id,
                'name_user' => $request->input('name_user'),
                'name_winner' => $request->input('name_winner'),
                'room_code' => $request->input('room_code'),
                'score' => $request->input('score'),
            ]);

            $check_data = Beerpong::where('qr_id',  $data->id)->first();
            
            if($check_data){
                if( $check_data->higest_score < $request->input('score')) {
                    $higest_score = $request->input('score');
                    Beerpong::where('qr_id', $data->id)->update([
                        'higest_score' => $higest_score,
                        'total_play' => $check_data->total_play + 1,
                    ]);
                    
                } else {
                    Beerpong::where('qr_id', $data->id)->update([
                        'total_play' => $check_data->total_play + 1,
                    ]);
                }
                
            }else{
                Beerpong::create([
                    'qr_id' =>  $data->id,
                    'higest_score' => $request->input('score'),
                    'total_play' => 1,
                ]);
            }

            Qr::where('id', $data->id)->update([
                'scan' => $data->scan + 1,
                'total_beerpong' => $data->total_beerpong + 1,
            ]);
            
            return response()->json([
                "response" => [
                    "status"    => 200,
                    "message"   => "Success"
                ],
                "data" => $store
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
