<?php

namespace App\Exports;

use App\Models\Outlet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportDashboard implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if(auth()->user()->roles == 'ADMIN') {
            return Outlet::join('areas', 'areas.id', '=', 'outlets.area_id')
            ->select('outlet', 'ao_name', 'ro', 'transaction','reedem', 'alamat', 'program_start', 'program_stop')
            ->get();
        }else{
            return Outlet::join('areas', 'areas.id', '=', 'outlets.area_id')
            ->select('outlet', 'ao_name', 'ro', 'transaction','reedem', 'alamat', 'program_start', 'program_stop')
            ->where('outlets.id', auth()->user()->outlet_id)
            ->get();
        }
        
    }

    public function headings(): array
    {
        return [
            "Outlet",
            "AO Office",
            "Regional",
            "Transaction",
            "Redeem",
            "Alamat",
            "Program Start",
            "Program End",
        ];
    }
}
