<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function index() {
        $pendaftaran = Pendaftaran::All();
        $user = Auth::user();
        $test = $user->id;
        $jumlahData = Pendaftaran::where('users_id', $test)->count();
        $ambilData = Pendaftaran::where('users_id', $test)->get();

        return view('pendaftaran', compact('pendaftaran','jumlahData','test','ambilData'));
    }

    public function daftar(Request $req) {
        $validate = $req->all([
            'nama' => 'required',
            'agama' => 'required',
            'tempat_Lahir' => 'required',
            'tanggal_Lahir' => 'required',
            'jenis_Kelamin' => 'required',
            'alamat' => 'required',
            'kode_Pos' => 'required',
            'berat_Badan' => 'required',
            'tinggi_Badan' => 'required',
            'anak_Keberapa' => 'required',
            'kewarganegaraan' => 'required',
            'berkebutuhan_Khusus' => 'required',

            'nama_Ayah' => 'required',
            'nik_Ayah' => 'required',
            'tahunLahir_Ayah' => 'required',
            'pendidikan_Ayah' => 'required',
            'pekerjaan_Ayah' => 'required',
            'penghasilan_Ayah' => 'required',

            'nama_Ibu' => 'required',
            'nik_Ibu' => 'required',
            'tahunLahir_Ibu' => 'required',
            'pendidikan_Ibu' => 'required',
            'pekerjaan_Ibu' => 'required',
            'penghasilan_Ibu' => 'required',
        ]);

        Pendaftaran::create($req->all());

        $notification = array(
            'message' => 'Pendaftaran berhasil',
            'alert-type' => 'success'
        );

        return redirect()->route('pendaftaran')->with($notification);
    }
}
