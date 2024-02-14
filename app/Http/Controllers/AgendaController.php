<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function tambahagenda(){
        return view('Dashboard/Agenda/tambahagenda');
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
        return view('Dashboard/Agenda/daftaragenda', compact('data'));
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
