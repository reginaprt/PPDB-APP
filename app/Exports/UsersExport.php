<?php

namespace App\Exports;

use App\Models\Laporan;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection
{
    public function collection()
    {
        // Gantikan dengan data yang ingin Anda ekspor
        return Laporan::all();
    }
}