<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Foto;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function indexfoto(){
        $data = Foto::orderBy('id', 'desc')->simplePaginate(4);
        return view('Dashboard/Galeri/Foto/indexfoto', compact('data'));
    }
    public function uploadfoto(Request $req){
        $judul_foto = $req->judul_foto;
        $deskripsi_foto = $req->deskripsi_foto;
        $gambar = $req->file('gfoto');
       
        $this->validate($req, [
            'gfoto' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048', 'required'],
            'deskripsi_foto' => 'required',
        ]);
        $path = 'GFOTO';
        $ext = $gambar->getClientOriginalExtension();
        $namafile = 'Gambar_'.date('d_y_t').".".$ext;
        $gambar->move($path, $namafile);
        $data = Foto::create([
            'gfoto' => $namafile,
            'judul_foto'   => $judul_foto,
            'deskripsi_foto'     => $deskripsi_foto,
           
        ]);
        Alert::toast('Foto Berhasil Di Upload', 'success'); 
        return redirect()->back();
    }
    public function hapusfoto($id){
        $data = Foto::find($id)->delete();
        Alert::toast('Foto Berhasil Di Hapus', 'success'); 
        return redirect()->back();
    }
}
