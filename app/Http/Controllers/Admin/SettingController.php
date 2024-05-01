<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() {

        $datas = Setting::paginate(10);

        return view('admin.setting.index', compact('datas'));
    }

    public function edit($id)
    {
        $data = Setting::findOrFail($id);
        return view('admin.setting.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {

        if($request->fe){
            $fe = time().'fe.'.$request->fe->extension();  
            $request->fe->move(public_path('images'), $fe);

            $setting->update([
                'nama_program'     => $request->input('nama_program'),
                'background_fe'    => asset('images/'.$fe),
            ]);

        } else if($request->stampel) {
            $stampel = time().'stampel.'.$request->stampel->extension();  
            $request->stampel->move(public_path('images'), $stampel);

            $setting->update([
                'nama_program'     => $request->input('nama_program'),
                'stampel'          => asset('images/'.$stampel),
            ]);

        } else if($request->program) {
            $program = time().'program.'.$request->program->extension();  
            $request->program->move(public_path('images'), $program);

            $setting->update([
                'nama_program'     => $request->input('nama_program'),
                'program'          => asset('images/'.$program),
            ]);

        } else if($request->brand ) {
            $brand = time().'brand.'.$request->brand->extension();  
            $request->brand->move(public_path('images'), $brand);

            $setting->update([
                'nama_program'     => $request->input('nama_program'),
                'brand'            => asset('images/'.$brand),
            ]);

        } else {
            $setting->update([
                'nama_program'     => $request->input('nama_program'),
            ]);
        }

        if ($setting) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.setting.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.setting.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
}
