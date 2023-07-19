<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Laporan;
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


        $laporan = new Laporan;

        $laporan->id_pendaftaran = $req->get('id');
        $laporan->users_id = $req->get('users_id');
        $laporan->nama = $req->get('nama');
        $laporan->tanggal_Lahir = $req->get('tanggal_Lahir');
        $laporan->tempat_Lahir = $req->get('tempat_Lahir');
        $laporan->agama = $req->get('agama');
        $laporan->jenis_Kelamin = $req->get('jenis_kelamin');
        $laporan->alamat = $req->get('alamat');
        $laporan->kode_Pos = $req->get('kode_Pos');
        $laporan->berat_Badan = $req->get('berat_Badan');
        $laporan->tinggi_Badan = $req->get('tinggi_Badan');
        $laporan->anak_Keberapa = $req->get('anak_Keberapa');
        $laporan->kewarganegaraan = $req->get('kewarganegaraan');
        $laporan->berkebutuhan_Khusus = $req->get('berkebutuhan_Khusus');

        $laporan->nama_Ayah = $req->get('nama_Ayah');
        $laporan->nik_Ayah = $req->get('nik_Ayah');
        $laporan->tahunLahir_Ayah = $req->get('tahunLahir_Ayah');
        $laporan->pendidikan_Ayah = $req->get('pendidikan_Ayah');
        $laporan->pekerjaan_Ayah = $req->get('pekerjaan_Ayah');
        $laporan->penghasilan_Ayah = $req->get('penghasilan_Ayah');

        $laporan->nama_Ibu = $req->get('nama_Ibu');
        $laporan->nik_Ibu = $req->get('nik_Ibu');
        $laporan->tahunLahir_Ibu = $req->get('tahunLahir_Ibu');
        $laporan->pendidikan_Ibu = $req->get('pendidikan_Ibu');
        $laporan->pekerjaan_Ibu = $req->get('pekerjaan_Ibu');
        $laporan->penghasilan_Ibu = $req->get('penghasilan_Ibu');

        $laporan->save();

        $notification = array(
            'message' => 'Pendaftaran berhasil',
            'alert-type' => 'success'
        );

        return redirect()->route('pendaftaran')->with($notification);
    }
}
