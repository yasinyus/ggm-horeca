<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Filter;
use App\Models\Merchandise;
use App\Models\Qr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('q') !== NULL) {
            $datas = Merchandise::latest()->when(request()->q, function ($datas) {
                $datas = $datas->where('name', 'like', '%' . request()->q . '%');
            })->paginate(10);
            } else {
                $datas = Merchandise::paginate(10);
            }

        return view('admin.merch.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.merch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $photo = time().'44.'.$request->photo->extension();  
        $request->photo->move(public_path('images'), $photo);

        $data = Merchandise::create([
            'name'          => $request->input('name'),
            'value'         => $request->input('value'),
            'status'        => $request->input('status'),
            'photo'         => asset('images/'.$photo),
        ]);

        //assign role
        // $user->assignRole($request->input('role'));

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.merch.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.merch.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $data = Merchandise::findOrFail($id);
        return view('admin.merch.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchandise $merch)
    {

        if($request->photo){

            $photo = time().'44.'.$request->photo->extension();  
            $request->photo->move(public_path('images'), $photo);

            $merch->update([
                'name'          => $request->input('name'),
                'value'         => $request->input('value'),
                'status'        => $request->input('status'),
                'photo'         => asset('images/'.$photo),
            ]);
        } else {
            $merch->update([
                'name'         => $request->input('name'),
                'value'        => $request->input('value'),
                'status'       => $request->input('status'),
            ]);
        }

        if ($merch) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.merch.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.merch.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $user = Filter::findOrFail($id);
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
