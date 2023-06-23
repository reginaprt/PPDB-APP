<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pendaftaran;


class kelolaPendaftarancontroller extends Controller
{
    public function index() {
        $kelolaPendaftaran = Pendaftaran::All();

        return view('kelolaPendaftaran', compact('kelolaPendaftaran'));

        Pendaftaran::create($req->all());
    }
}
