<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Audience;
use App\Models\Interaction;
use App\Models\Qr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AudienceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('q') !== NULL) {
            $datas = User::latest('users.created_at')->where('roles', 'BUYERS')
            ->when(request()
            ->q, function ($data) {
                $data = $data->where('name', 'like', '%' . request()->q . '%')->where('roles', 'BUYERS');
        })->paginate(10);
        } else {
            $datas = User::where('roles', 'BUYERS')->paginate(10);
            // $datas = User::join('outlets', 'outlets.id', '=', 'users.outlet_id')->paginate(10);
        }

        return view('admin.audience.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $qr = Qr::all();
        $campaign = Campaign::all();
        return view('admin.audience.create', [
            'qr' => $qr,
            'campaign' => $campaign,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'campaign'          => 'required',
            'qr_id'             => 'required',
            'status_audience'   => 'required'
        ]);

        $unicode = substr(md5(mt_rand()), 0, 7);

        $data = Audience::create([
            'unicode_audi'      => $unicode,
            'campaign_id'       => $request->input('campaign'),
            'qr_id'             => $request->input('qr_id'),
            'status_audience'   => $request->input('status_audience'),
            'play'              => 0,
        ]);
        
        foreach ($request->addMoreInputFields as $key => $value) {
            $fname = rand().'.'.$value['file']->getClientOriginalName().'.'.$value['file']->getClientOriginalExtension();
            $value['file']->move(public_path('images'), $fname);
            Interaction::create([
                'unicode_inte'           => $unicode,
                'name'              => $value['name'],
                'image'             => $fname
            ]);
        }

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.audience.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.audience.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_qr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Audience::findOrFail($id);
        $qr = Qr::all();
        $campaign = Campaign::all();
        return view('admin.audience.edit', compact('data', 'qr', 'campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        Audience::where('unicode_audi', $request->ucode)->delete();
        Interaction::where('unicode_inte', $request->ucode)->delete();

        $data = Audience::create([
            'unicode_audi'      => $request->ucode,
            'campaign_id'       => $request->input('campaign'),
            'qr_id'             => $request->input('qr_id'),
            'status_audience'   => $request->input('status_audience'),
            'play'              => $request->play,
        ]);
        
        foreach ($request->addMoreInputFields as $key => $value) {
            $fname = rand().'.'.$value['file']->getClientOriginalName().'.'.$value['file']->getClientOriginalExtension();
            $value['file']->move(public_path('images'), $fname);
            Interaction::create([
                'unicode_inte'      => $request->ucode,
                'name'              => $value['name'],
                'image'             => $fname
            ]);
        }

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.audience.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.audience.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Audience::findOrFail($id);
        $user->delete();


        if ($user) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
