<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Laporan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class kelolaPendaftarancontroller extends Controller
{
    public function index() {
        $kelolaPendaftaran = Pendaftaran::All();
        // dd($kelolaPendaftaran);

        return view('kelolaPendaftaran', compact('kelolaPendaftaran'));

        Pendaftaran::create($req->all());
    }

    public function tambah(Request $req) {
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

        $user = new User;

        $user->name = $req->get('nama');
        $user->email = $req->get('email');
        $user->password = Hash::make($req->get('password'));
        $user->roles_id = 2;

        $latestData = User::latest('id')->first();

        $user->save();

        $pendaftaran = new Pendaftaran;

        $pendaftaran->users_id = $user->id;
        $pendaftaran->nama = $req->get('nama');
        $pendaftaran->tanggal_Lahir = $req->get('tanggal_Lahir');
        $pendaftaran->tempat_Lahir = $req->get('tempat_Lahir');
        $pendaftaran->agama = $req->get('agama');
        $pendaftaran->jenis_Kelamin = $req->get('jenis_kelamin');
        $pendaftaran->alamat = $req->get('alamat');
        $pendaftaran->kode_Pos = $req->get('kode_Pos');
        $pendaftaran->berat_Badan = $req->get('berat_Badan');
        $pendaftaran->tinggi_Badan = $req->get('tinggi_Badan');
        $pendaftaran->anak_Keberapa = $req->get('anak_Keberapa');
        $pendaftaran->kewarganegaraan = $req->get('kewarganegaraan');
        $pendaftaran->berkebutuhan_Khusus = $req->get('berkebutuhan_Khusus');

        $pendaftaran->nama_Ayah = $req->get('nama_Ayah');
        $pendaftaran->nik_Ayah = $req->get('nik_Ayah');
        $pendaftaran->tahunLahir_Ayah = $req->get('tahunLahir_Ayah');
        $pendaftaran->pendidikan_Ayah = $req->get('pendidikan_Ayah');
        $pendaftaran->pekerjaan_Ayah = $req->get('pekerjaan_Ayah');
        $pendaftaran->penghasilan_Ayah = $req->get('penghasilan_Ayah');

        $pendaftaran->nama_Ibu = $req->get('nama_Ibu');
        $pendaftaran->nik_Ibu = $req->get('nik_Ibu');
        $pendaftaran->tahunLahir_Ibu = $req->get('tahunLahir_Ibu');
        $pendaftaran->pendidikan_Ibu = $req->get('pendidikan_Ibu');
        $pendaftaran->pekerjaan_Ibu = $req->get('pekerjaan_Ibu');
        $pendaftaran->penghasilan_Ibu = $req->get('penghasilan_Ibu');

        if($req->hasFile('ijazah')){
            $extension = $req->file('ijazah')->extension();
            $filename = 'ijazah_pendaftar'.time().'.'. $extension;
            $req->file('ijazah')->storeAs('public/ijazah_pendaftar', $filename);
            $pendaftaran->ijazah = $filename;
        }
        if($req->hasFile('akta')){
            $extension = $req->file('akta')->extension();
            $filename = 'akta_pendaftar'.time().'.'. $extension;
            $req->file('akta')->storeAs('public/akta_pendaftar', $filename);
            $pendaftaran->akta = $filename;
        }
        if($req->hasFile('kk')){
            $extension = $req->file('kk')->extension();
            $filename = 'kk_pendaftar'.time().'.'. $extension;
            $req->file('kk')->storeAs('public/kk_pendaftar', $filename);
            $pendaftaran->kk = $filename;
        }
        if($req->hasFile('paspoto')){
            $extension = $req->file('paspoto')->extension();
            $filename = 'paspoto_pendaftar'.time().'.'. $extension;
            $req->file('paspoto')->storeAs('public/paspoto_pendaftar', $filename);
            $pendaftaran->paspoto = $filename;
        }

        $pendaftaran->save();

        $laporan = new Laporan;

        $laporan->id_pendaftaran = $req->get('id');
        $laporan->users_id = $user->id;
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

        if($req->hasFile('ijazah')){
            $extension = $req->file('ijazah')->extension();
            $filename = 'ijazah_laporan'.time().'.'. $extension;
            $req->file('ijazah')->storeAs('public/ijazah_laporan', $filename);
            $laporan->ijazah = $filename;
        }
        if($req->hasFile('akta')){
            $extension = $req->file('akta')->extension();
            $filename = 'akta_laporan'.time().'.'. $extension;
            $req->file('akta')->storeAs('public/akta_laporan', $filename);
            $laporan->akta = $filename;
        }
        if($req->hasFile('kk')){
            $extension = $req->file('kk')->extension();
            $filename = 'kk_laporan'.time().'.'. $extension;
            $req->file('kk')->storeAs('public/kk_laporan', $filename);
            $laporan->kk = $filename;
        }
        if($req->hasFile('paspoto')){
            $extension = $req->file('paspoto')->extension();
            $filename = 'paspoto_laporan'.time().'.'. $extension;
            $req->file('paspoto')->storeAs('public/paspoto_laporan', $filename);
            $laporan->paspoto = $filename;
        }

        $laporan->save();

        $notification = array(
            'message' => 'Pendaftaran berhasil',
            'alert-type' => 'success'
        );

        return redirect()->route('pendaftaran')->with($notification);
    }

    public function edit(Request $req) {
        $kelolaPendaftaran = Pendaftaran::find($req->get('id'));

        // $validate = $req->validate([
        //     'nama' => 'required',
        //     'agama' => 'required',
        //     'tempat_Lahir' => 'required',
        //     'tanggal_Lahir' => 'required',
        //     'jenis_Kelamin' => 'required',
        //     'alamat' => 'required',
        //     'kode_Pos' => 'required',
        //     'berat_Badan' => 'required',
        //     'tinggi_Badan' => 'required',
        //     'anak_Keberapa' => 'required',
        //     'kewarganegaraan' => 'required',
        //     'berkebutuhan_Khusus' => 'required',

        //     'nama_Ayah' => 'required',
        //     'nik_Ayah' => 'required',
        //     'tahunLahir_Ayah' => 'required',
        //     'pendidikan_Ayah' => 'required',
        //     'pekerjaan_Ayah' => 'required',
        //     'penghasilan_Ayah' => 'required',

        //     'nama_Ibu' => 'required',
        //     'nik_Ibu' => 'required',
        //     'tahunLahir_Ibu' => 'required',
        //     'pendidikan_Ibu' => 'required',
        //     'pekerjaan_Ibu' => 'required',
        //     'penghasilan_Ibu' => 'required',
        // ]);

        $kelolaPendaftaran->nama = $req->get('nama');
        $kelolaPendaftaran->tanggal_Lahir = $req->get('tanggal_Lahir');
        $kelolaPendaftaran->tempat_Lahir = $req->get('tempat_Lahir');
        $kelolaPendaftaran->agama = $req->get('agama');
        $kelolaPendaftaran->jenis_Kelamin = $req->get('jenis_kelamin');
        $kelolaPendaftaran->alamat = $req->get('alamat');
        $kelolaPendaftaran->kode_Pos = $req->get('kode_Pos');
        $kelolaPendaftaran->berat_Badan = $req->get('berat_Badan');
        $kelolaPendaftaran->tinggi_Badan = $req->get('tinggi_Badan');
        $kelolaPendaftaran->anak_Keberapa = $req->get('anak_Keberapa');
        $kelolaPendaftaran->kewarganegaraan = $req->get('kewarganegaraan');
        $kelolaPendaftaran->berkebutuhan_Khusus = $req->get('berkebutuhan_Khusus');

        $kelolaPendaftaran->nama_Ayah = $req->get('nama_Ayah');
        $kelolaPendaftaran->nik_Ayah = $req->get('nik_Ayah');
        $kelolaPendaftaran->tahunLahir_Ayah = $req->get('tahunLahir_Ayah');
        $kelolaPendaftaran->pendidikan_Ayah = $req->get('pendidikan_Ayah');
        $kelolaPendaftaran->pekerjaan_Ayah = $req->get('pekerjaan_Ayah');
        $kelolaPendaftaran->penghasilan_Ayah = $req->get('penghasilan_Ayah');

        $kelolaPendaftaran->nama_Ibu = $req->get('nama_Ibu');
        $kelolaPendaftaran->nik_Ibu = $req->get('nik_Ibu');
        $kelolaPendaftaran->tahunLahir_Ibu = $req->get('tahunLahir_Ibu');
        $kelolaPendaftaran->pendidikan_Ibu = $req->get('pendidikan_Ibu');
        $kelolaPendaftaran->pekerjaan_Ibu = $req->get('pekerjaan_Ibu');
        $kelolaPendaftaran->penghasilan_Ibu = $req->get('penghasilan_Ibu');

        $kelolaPendaftaran->save();

        $notification = array(
            'message' => 'Pendaftaran berhasil diubah',
            'alert-type' => 'success'
        );

        return redirect()->route('kelolaPendaftaran')->with($notification);
    }

    public function delete($id){
        $pendaftaran = Pendaftaran::find($id);

        $pendaftaran->delete();

        $notification = array(
            'message' => 'Data User berhasil dihapus',
            'alert-type' => 'success'
        );

        return redirect()->route('kelolaPendaftaran')->with($notification);

    }

    public function getDataPendaftar($id){
        $pendaftaran = Pendaftaran::find($id);
        // console.log($pendaftaran);
        return response()->json($pendaftaran);
    }

    public function terima($id){
        $kelolaPendaftaran = Pendaftaran::find($id);

        if ($kelolaPendaftaran->status == "Diproses"){

            $kelolaPendaftaran->status = 'Lulus';
            $kelolaPendaftaran->save();

            $laporan = new Laporan;

            $laporan->id_pendaftaran = $kelolaPendaftaran->id;
            $laporan->users_id = $kelolaPendaftaran->users_id;
            $laporan->nama = $kelolaPendaftaran->nama;
            $laporan->tanggal_Lahir = $kelolaPendaftaran->tanggal_Lahir;
            $laporan->tempat_Lahir = $kelolaPendaftaran->tempat_Lahir;
            $laporan->agama = $kelolaPendaftaran->agama;
            $laporan->jenis_Kelamin = $kelolaPendaftaran->jenis_Kelamin;
            $laporan->alamat = $kelolaPendaftaran->alamat;
            $laporan->kode_Pos = $kelolaPendaftaran->kode_Pos;
            $laporan->berat_Badan = $kelolaPendaftaran->berat_Badan;
            $laporan->tinggi_Badan = $kelolaPendaftaran->tinggi_Badan;
            $laporan->anak_Keberapa = $kelolaPendaftaran->anak_Keberapa;
            $laporan->kewarganegaraan = $kelolaPendaftaran->kewarganegaraan;
            $laporan->berkebutuhan_Khusus = $kelolaPendaftaran->berkebutuhan_Khusus;

            $laporan->nama_Ayah = $kelolaPendaftaran->nama_Ayah;
            $laporan->nik_Ayah = $kelolaPendaftaran->nik_Ayah;
            $laporan->tahunLahir_Ayah = $kelolaPendaftaran->tahunLahir_Ayah;
            $laporan->pendidikan_Ayah = $kelolaPendaftaran->pendidikan_Ayah;
            $laporan->pekerjaan_Ayah = $kelolaPendaftaran->pekerjaan_Ayah;
            $laporan->penghasilan_Ayah = $kelolaPendaftaran->penghasilan_Ayah;

            $laporan->nama_Ibu = $kelolaPendaftaran->nama_Ibu;
            $laporan->nik_Ibu = $kelolaPendaftaran->nik_Ibu;
            $laporan->tahunLahir_Ibu = $kelolaPendaftaran->tahunLahir_Ibu;
            $laporan->pendidikan_Ibu = $kelolaPendaftaran->pendidikan_Ibu;
            $laporan->pekerjaan_Ibu = $kelolaPendaftaran->pekerjaan_Ibu;
            $laporan->penghasilan_Ibu = $kelolaPendaftaran->penghasilan_Ibu;
            $laporan->status = "Lulus";

            $laporan->save();
        }

        $kelolaPendaftaran->status = 'Lulus';
        $kelolaPendaftaran->save();
        $notification = array(
            'message' => 'Data Pendaftar berhasil di Luluskan',
            'alert-type' => 'success'
        );
        return redirect()->route('kelolaPendaftaran')->with($notification);
    }
    public function tolak($id){
        $kelolaPendaftaran = Pendaftaran::find($id);

        if ($kelolaPendaftaran->status == "Diproses"){

            $kelolaPendaftaran->status = 'Tidak Lulus';
            $kelolaPendaftaran->save();

            $laporan = new Laporan;

            $laporan->id_pendaftaran = $kelolaPendaftaran->id;
            $laporan->users_id = $kelolaPendaftaran->users_id;
            $laporan->nama = $kelolaPendaftaran->nama;
            $laporan->tanggal_Lahir = $kelolaPendaftaran->tanggal_Lahir;
            $laporan->tempat_Lahir = $kelolaPendaftaran->tempat_Lahir;
            $laporan->agama = $kelolaPendaftaran->agama;
            $laporan->jenis_Kelamin = $kelolaPendaftaran->jenis_Kelamin;
            $laporan->alamat = $kelolaPendaftaran->alamat;
            $laporan->kode_Pos = $kelolaPendaftaran->kode_Pos;
            $laporan->berat_Badan = $kelolaPendaftaran->berat_Badan;
            $laporan->tinggi_Badan = $kelolaPendaftaran->tinggi_Badan;
            $laporan->anak_Keberapa = $kelolaPendaftaran->anak_Keberapa;
            $laporan->kewarganegaraan = $kelolaPendaftaran->kewarganegaraan;
            $laporan->berkebutuhan_Khusus = $kelolaPendaftaran->berkebutuhan_Khusus;

            $laporan->nama_Ayah = $kelolaPendaftaran->nama_Ayah;
            $laporan->nik_Ayah = $kelolaPendaftaran->nik_Ayah;
            $laporan->tahunLahir_Ayah = $kelolaPendaftaran->tahunLahir_Ayah;
            $laporan->pendidikan_Ayah = $kelolaPendaftaran->pendidikan_Ayah;
            $laporan->pekerjaan_Ayah = $kelolaPendaftaran->pekerjaan_Ayah;
            $laporan->penghasilan_Ayah = $kelolaPendaftaran->penghasilan_Ayah;

            $laporan->nama_Ibu = $kelolaPendaftaran->nama_Ibu;
            $laporan->nik_Ibu = $kelolaPendaftaran->nik_Ibu;
            $laporan->tahunLahir_Ibu = $kelolaPendaftaran->tahunLahir_Ibu;
            $laporan->pendidikan_Ibu = $kelolaPendaftaran->pendidikan_Ibu;
            $laporan->pekerjaan_Ibu = $kelolaPendaftaran->pekerjaan_Ibu;
            $laporan->penghasilan_Ibu = $kelolaPendaftaran->penghasilan_Ibu;

            $laporan->status = "Tidak Lulus";

            $laporan->save();
        }

        $notification = array(
            'message' => 'Data Pendaftar berhasil di Tolak',
            'alert-type' => 'success'
        );
        return redirect()->route('kelolaPendaftaran')->with($notification);
    }

    public function exportPendaftaran($id){
        $pendaftaran = Pendaftaran::findOrFail($id);
        view()->share('pendaftaran', $pendaftaran);
        $pdf = PDF::loadview('export.pendaftaran');
        return $pdf->download('data_pendaftaran.pdf');
    }
}
