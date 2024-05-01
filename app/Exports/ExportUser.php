<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::where('roles', 'BUYERS')->select(
            'name',
            'email',
            'no_telp',
            'transaction',
            'redeem',
            'jk',
            'tgl_lahir',
            'kota',
            'merek',
            'pekerjaan',
            'hoby',
        )->get();
    }

    public function headings(): array
    {
        return [
            "Nama",
            "Email",
            "No Telepon",
            "Transaksi",
            "Redeem",
            "Jenis Kelamin",
            "Tanggal Lahir",
            "Kota/Domisili",
            "Merek Rokok",
            "Pekerjaan ",
            "Hoby",
        ];
    }
}
