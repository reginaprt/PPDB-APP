<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
use PDF;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index() {
        $Laporan = Laporan::All();
        return view('Laporan', compact('Laporan'));
    }
    public function exportLaporan(){
        $laporan = Laporan::all();
        view()->share('laporan', $laporan);
        $pdf = PDF::loadview('export.laporan')->setPaper(array(0, 0, 1080, 1920), 'landscape');
        return $pdf->download('data_laporan.pdf');
    }
}
