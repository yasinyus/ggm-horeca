<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Outlet;
use App\Models\Area;
use App\Models\Merchandise;
use App\Models\Stock;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Intervention\Image\Facades\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class OutletController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()->roles == "ADMIN"){
            if($request->get('q') !== NULL) {
                $datas = Outlet::latest('outlets.created_at')
                ->join('areas', 'areas.id', '=', 'outlets.area_id')
                ->when(request()
                ->q, function ($data) {
                    $data = $data->where('outlet', 'like', '%' . request()->q . '%');
                })->paginate(10);
                } else {
                    $datas = Outlet::join('areas', 'areas.id', '=', 'outlets.area_id')
                    ->select('*', 'outlets.id as edit_id')
                    ->paginate(10);
                }
        } else {
            if($request->get('q') !== NULL) {
                $datas = Outlet::latest('outlets.created_at')
                ->join('areas', 'areas.id', '=', 'outlets.area_id')
                ->when(request()
                ->q, function ($data) {
                    $data = $data->where('outlet', 'like', '%' . request()->q . '%');
                })->paginate(10);
                } else {
                    $datas = Outlet::join('areas', 'areas.id', '=', 'outlets.area_id')
                    ->where('outlets.id', '=', auth()->user()->outlet_id)
                    ->select('*', 'outlets.id as edit_id')
                    ->paginate(10);
                }
        }
        
        $merch = Merchandise::all();

        $merch_stok = Stock::join('merchandises', 'merchandises.id', '=', 'stocks.merchandise_id')
        ->join('outlets', 'outlets.id', '=', 'stocks.outlet_id')->get();
        return view('admin.outlet.index', compact('datas', 'merch', 'merch_stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merch = Merchandise::all();
        $area = Area::all();
        return view('admin.outlet.create', [
            'area' => $area,
            'merch' => $merch,
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
        // $this->validate($request, [
        //     'area_id'          => 'required',
        //     'outlet'           => 'required',
        //     'tipe'             => 'required',
        //     'alamat'           => 'required',
        //     'program_start'    => 'required',
        //     'program_Stop'     => 'required',
        //     'status'           => 'required',
        //     'link'             => 'required',
        // ]);

        $data = Outlet::create([
            'unicode'       => substr(md5(mt_rand()), 0, 7),
            'area_id'       => $request->input('area_id'),
            'outlet'        => $request->input('outlet'),
            'tipe'          => $request->input('tipe'),
            'transaction'   => 0,
            'reedem'        => 0,
            'alamat'        => $request->input('alamat'),
            'program_start' => $request->input('program_start'),
            'program_stop'  => $request->input('program_stop'),
            'status'        => $request->input('status'),
            'link'          => $request->input('link'),
        ]);

        //assign role
        // $user->assignRole($request->input('role'));

        if ($data) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.outlet.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.outlet.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function addstock(Request $request)
    {
        $data = Stock::where('outlet_id', $request->outlet_ids);
        $data->delete();
    
        foreach ($request->addMoreFiles as $key => $value) {

            $save = Stock::create([
                'outlet_id'             => $request->outlet_ids,
                'merchandise_id'        => $value['merchandise_id'],
                'jumlah_stock'          => $value['jumlah_stock'],
            ]);
        }

        $outlet = Outlet::where('id', $request->outlet_ids);

        $outlet->update([
            'is_stock'   => 1
        ]);

        if ($save) {
            return redirect()->route('admin.outlet.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('admin.outlet.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $data = Outlet::findOrFail($id);
        $area = Area::all();
        return view('admin.outlet.edit', compact('data', 'area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        // $this->validate($request, [
        //     'area_id'          => 'required',
        //     'outlet'           => 'required',
        //     'tipe'             => 'required',
        //     'alamat'           => 'required',
        //     'program_start'    => 'required',
        //     'program_Stop'     => 'required',
        //     'status'           => 'required',
        //     'link'             => 'required',
        // ]);

            $outlet->update([
                'area_id'       => $request->input('area_id'),
                'outlet'        => $request->input('outlet'),
                'tipe'          => $request->input('tipe'),
                'alamat'        => $request->input('alamat'),
                'program_start' => $request->input('program_start'),
                'program_stop'  => $request->input('program_stop'),
                'status'        => $request->input('status'),
                'link'          => $request->input('link'),
                
            ]);

        if ($outlet) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.outlet.index')->with(['success' => 'Data Berhasil Diupdate!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('admin.outlet.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $data = Outlet::findOrFail($id);
        $data->delete();


        if ($data) {
            return response()->json([
                'status' => 'success'
            ]);
        } else {
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
    
    public function qr_download($id) {
        $qrPath = Storage::path('public/qrcode/' . $id . '.png');
        QrCode::format('png')
            ->size(200)
            ->generate($id, $qrPath);

        $qrImage = Image::make($qrPath);

        // Create a new image with a larger canvas
        $width = $qrImage->width();
        $height = $qrImage->height() + 60; // Adjust for the height of the text
        $image = Image::canvas($width, $height);

        // Insert the QR code image onto the new canvas
        $image->insert($qrImage, 'top-left', 0, 0);

        $text = 'Your text goes here';
        $textX = $width / 2;
        $textY = $height - 10;

        $image->text($text, $textX, $textY, function ($font) {
            $font->size(50); // Adjust the font size as needed
            $font->color('#FF0000');
            $font->align('center');
        });

        $image->save(Storage::path('public/qrcode/' . $participant->unique_code . '2.png'));
    }


}
