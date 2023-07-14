<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Informasi;

class kelolaInformasiController extends Controller
{
    public function index() {
        $kelolaInformasi = Informasi::All();

        return view('kelolaInformasi', compact('kelolaInformasi'));
    }
}
