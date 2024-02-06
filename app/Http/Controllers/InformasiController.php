<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Informasi;
use App\Models\TagInformasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class InformasiController extends Controller
{
    public function upload_tag_informasi(Request $req) {
        $taginformasi = $req->taginformasi;
       $data =  TagInformasi::create([
            'tag_informasi' => $taginformasi,
            'slug_tag_informasi' => Str::slug($taginformasi),
        ]);
        Alert::toast('Tag Informasi Berhasil Di Buat', 'success'); 
        return redirect()->back();
    }
    public function hapus_taginformasi($id){
        $taginformasi = TagInformasi::find($id)->delete();
        Alert::toast('Tag Informasi Berhasil Di Hapus', 'success'); 
        return redirect()->back();
    }
    
    public function tambah_informasi(){
        $tagInformasiOut = TagInformasi::all();
        return view('Dashboard/Informasi/tambah_informasi', compact(
            'tagInformasiOut'
        ));
    }
    public function upload_informasi(Request $req){
        $judul_informasi = $req->judul_informasi;
        $tag_informasi = $req->tag_informasi;
        $deskripsi_informasi = $req->deskripsi_informasi;
        if($req->file('ginformasi') == null){
            $this->validate($req, [
                'deskripsi_informasi' => 'required',
            ]);
           
            $data = Informasi::create([
                'judul'   => $judul_informasi,
                'tag'     => $tag_informasi,
                'deskripsi' => $deskripsi_informasi,
                'slugberita'=> Str::slug($judul_informasi),
            ]);
            Alert::toast('Informasi Berhasil Di Buat', 'success'); 
            return redirect()->back();
        }else{
        $gambar = $req->file('ginformasi');
       
        $this->validate($req, [
            'ginformasi' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'deskripsi_informasi' => 'required',
        ]);
        $path = 'GINFORMASI';
        $ext = $gambar->getClientOriginalExtension();
        $namafile = 'Gambar_'.date('d_y_t').".".$ext;
        $gambar->move($path, $namafile);
        $data = Informasi::create([
            'ginformasi' => $namafile,
            'judul_informasi'   => $judul_informasi,
            'tag_informasi'     => $tag_informasi,
            'deskripsi_informasi' => $deskripsi_informasi,
            'slug_informasi'=> Str::slug($judul_informasi),
        ]);
        Alert::toast('Informasi Berhasil Di Buat', 'success'); 
        return redirect()->back();
        }
    }
    public function daftar_informasi(){
        $daftar_informasi = Informasi::orderBy('id', 'DESC')->simplePaginate(6);;
        return view('Dashboard/Informasi/daftar_informasi', compact('daftar_informasi'));
    }

    public function lihat_informasiadm($id){
        $data = Informasi::find($id);
        return view('Dashboard/Informasi/lihat_informasiadm', compact('data'));
    }
    public function hapus_informasiadm($id){
        $data = Informasi::find($id)->delete();
        alert()->success('Hore!','Post Deleted Successfully');
        return back();
    }
    public function edit_informasiadm($id){
        $datainformasi = Informasi::find($id);
        $tagOut    = TagInformasi::all();
        return view('Dashboard/Informasi/editinformasi', compact(
            'datainformasi',
            'tagOut'
        ));
    }
    public function update_informasiadm(Request $req, $id){
        $judul_informasi = $req->judul_informasi;
        $tag_informasi = $req->tag_informasi;
        $deskripsi_informasi = $req->deskripsi_informasi;
        if($req->file('ginformasi') == null){
            $this->validate($req, [
                'deskripsi_informasi' => 'required',
            ]);
           
            $data = Informasi::find($id)->update([
                'judul_informasi'   => $judul_informasi,
                'tag_informasi'     => $tag_informasi,
                'deskripsi_informasi' => $deskripsi_informasi,
                'slug_informasi'=> Str::slug($judul_informasi),
            ]);
            Alert::toast('Informasi Berhasil Di Update', 'success'); 
            return redirect()->back();
        }else{
        $gambar = $req->file('ginformasi');
       
        $this->validate($req, [
            'ginformasi' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'deskripsi_informasi' => 'required',
        ]);
        $path = 'GINFORMASI';
        $ext = $gambar->getClientOriginalExtension();
        $namafile = 'Gambar_'.date('d_y_t').".".$ext;
        $gambar->move($path, $namafile);
        $data = Informasi::find($id)->update([
            'ginformasi' => $namafile,
            'judul_informasi'   => $judul_informasi,
            'tag_informasi'     => $tag_informasi,
            'deskripsi_informasi' => $deskripsi_informasi,
            'slug_informasi'=> Str::slug($judul_informasi),
        ]);
        Alert::toast('Informasi Berhasil Di Update', 'success'); 
        return redirect()->back();
        }
    }
}
