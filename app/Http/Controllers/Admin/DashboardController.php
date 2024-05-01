<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Qr;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportDashboard;
use App\Models\Outlet;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->roles == 'ADMIN') {
            $transaksi = Transaction::get();
            $total_trans = $transaksi->count();
    
            $datas = Outlet::join('areas', 'areas.id', '=', 'outlets.area_id')
            ->paginate(10);
        } else {
            $transaksi = Transaction::where('outlet_id', '=', auth()->user()->outlet_id)->get();
            $total_trans = $transaksi->count();
    
            $datas = Outlet::join('areas', 'areas.id', '=', 'outlets.area_id')->where('outlets.id', '=', auth()->user()->outlet_id)
            ->paginate(10);
        }
        

    
        return view('admin.dashboard.index', compact('datas', 'total_trans'));
    }

    public function export() 
    {
        return Excel::download(new ExportDashboard, 'Download.xlsx');
    }    
}
