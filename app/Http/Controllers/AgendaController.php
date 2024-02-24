<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Agenda;
use App\Models\LogoSekolah;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function tambahagenda(){
        $logo = LogoSekolah::get();
        return view('Dashboard/Agenda/tambahagenda', compact('logo'));
    }
    public function uploadagenda(Request $req){
        $judul = $req->judul;
        $tanggal = $req->tanggal;
        $waktu = $req->waktu;
        $kegiatan = $req->kegiatan;
        $status = $req->status;

        $data = Agenda::create([
            'judul' => $judul,
            'tanggal' => $tanggal,
            'waktu' => $waktu,
            'kegiatan' => $kegiatan,
            'status' => $status
        ]);
        Alert::toast('Agenda Kegiatan Berhasil Di Hapus', 'success'); 
        return redirect()->back();
    }
    public function daftaragenda(){
        $data = Agenda::orderBy('id', 'DESC')->get();
        $logo = LogoSekolah::get();
        return view('Dashboard/Agenda/daftaragenda', compact('data', 'logo'));
    }
    public function ubahsukses($id){
    $data = Agenda::find($id)->update([
        'status' => 'Selesai',
    ]);
    Alert::toast('Agenda Kegiatan Berhasil Di Update', 'success'); 
    return redirect()->back();
    }
    public function ubahakan($id){
        $data = Agenda::find($id)->update([
            'status' => 'Akan',
        ]);
        Alert::toast('Agenda Kegiatan Berhasil Di Update', 'success'); 
        return redirect()->back();
    }
    public function ubahsedang($id){
        $data = Agenda::find($id)->update([
            'status' => 'Berjalan',
        ]);
        Alert::toast('Agenda Kegiatan Berhasil Di Update', 'success'); 
        return redirect()->back();
    }
    public function hapusagenda($id){
        $data = Agenda::find($id)->delete();
        Alert::toast('Agenda Kegiatan Berhasil Di Update', 'success'); 
        return redirect()->back();
    }
}
