<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Laporan;
use App\Models\Pendaftaran;

class LaporanController extends Controller
{
    public function index() {
        $Laporan = Pendaftaran::All();

        return view('Laporan', compact('Laporan'));
    }
}
