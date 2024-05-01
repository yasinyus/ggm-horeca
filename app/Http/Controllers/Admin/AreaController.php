<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\AreaImport;
use App\Models\Team;
use App\Models\Area;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class AreaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('q') !== NULL) {
            $datas = Area::when(request()->q, function ($data) {
            $data = $data->where('ao_name', 'like', '%' . request()->q . '%');
        })->paginate(10);
        } else {
            $datas = Area::paginate(10);
        }

        return view('admin.area.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.area.create');
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
            'ao_name'      => 'required|unique:areas',
            'ro'           => 'required',
            'wo'           => 'required',
            'status'       => 'required',
        ]);

        $data = Area::create([
            'ao_name'       => $request->input('ao_name'),
            'ro'            => $request->input('ro'),
            'wo'            => $request->input('wo'),
            'status'        => $request->input('status'),
        ]);


        if ($data) {
            return redirect()->route('admin.area.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.area.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        $import = Excel::import(new AreaImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('admin.area.index')->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('admin.area.index')->with(['error' => 'Data Gagal Diimport!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_campaign
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Area::findOrFail($id);
        return view('admin.area.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {

        $this->validate($request, [
            'ao_name'      => 'required',
            'ro'           => 'required',
            'wo'           => 'required',
            'status'       => 'required',
        ]);

        $area->update([
            'ao_name'       => $request->input('ao_name'),
            'ro'            => $request->input('ro'),
            'wo'            => $request->input('wo'),
            'status'        => $request->input('status'),
        ]);


        if ($area) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.area.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.area.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $user = Area::findOrFail($id);
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
