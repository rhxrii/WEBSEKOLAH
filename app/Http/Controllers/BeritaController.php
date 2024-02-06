<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Berita;
use App\Models\TagBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function upload_tag_berita(Request $req) {
        $tagberita = $req->tagberita;
       $data =  TagBerita::create([
            'tag' => $tagberita,
            'slug_tag' => Str::slug($tagberita),
        ]);
        Alert::toast('Tag Berita Berhasil Di Buat', 'success'); 
        return redirect()->back();
    }
    public function hapus_tagberita($id){
        $tagberita = TagBerita::find($id)->delete();
        Alert::toast('Tag Berita Berhasil Di Hapus', 'success'); 
        return redirect()->back();
    }
    public function tambah_berita(){
        $tagOut = TagBerita::all();
        return view('Dashboard/Berita/tambah_berita', compact(
            'tagOut',
        ));
    }
    public function upload_berita(Request $req){
        $judul = $req->judulberita;
        $tag = $req->tag;
        $deskripsi = $req->deskripsi;
        if($req->file('gambarberita') == null){
            $this->validate($req, [
                'deskripsi' => 'required',
            ]);
           
            $data = Berita::create([
                'judul'   => $judul,
                'tag'     => $tag,
                'deskripsi' => $deskripsi,
                'slugberita'=> Str::slug($judul),
            ]);
            Alert::toast('Berita Berhasil Di Buat', 'success'); 
            return redirect()->back();
        }else{
        $gambar = $req->file('gambarberita');
       
        $this->validate($req, [
            'gambarberita' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'deskripsi' => 'required',
        ]);
        $path = 'GBERITA';
        $ext = $gambar->getClientOriginalExtension();
        $namafile = 'Gambar_'.date('d_y_t').".".$ext;
        $gambar->move($path, $namafile);
        $data = Berita::create([
            'gberita' => $namafile,
            'judul'   => $judul,
            'tag'     => $tag,
            'deskripsi' => $deskripsi,
            'slugberita'=> Str::slug($judul),
        ]);
        Alert::toast('Berita Berhasil Di Buat', 'success'); 
        return redirect()->back();
        }
    }
    public function daftar_berita(){
        $daftarberita = Berita::orderBy('id', 'DESC')->simplePaginate(6);
        return view('Dashboard/Berita/daftar_berita', compact('daftarberita'));
       
    }
    public function lihat_beritaadm($id){
        $data = Berita::find($id);
        return view('Dashboard/Berita/lihatberitaadm', compact('data'));
    }
    function hapus_beritaadm($id){
        $data = Berita::find($id)->delete();
        alert()->success('Hore!','Post Deleted Successfully');
        return back();
    }
    public function edit_beritaadm($id){
        $databerita = Berita::find($id);
        $tagOut    = TagBerita::all();
        return view('Dashboard/Berita/editberita', compact(
            'databerita',
            'tagOut'
        ));
    }
    public function update_beritaadm(Request $req, $id){
        $judul = $req->judulberita;
        $tag = $req->tag;
        $deskripsi = $req->deskripsi;
        if($req->file('gambarberita') == null){
            $this->validate($req, [
                'deskripsi' => 'required',
            ]);
           
            $data = Berita::find($id)->update([
                'judul'   => $judul,
                'tag'     => $tag,
                'deskripsi' => $deskripsi,
                'slugberita'=> Str::slug($judul),
            ]);
            Alert::toast('Berita Berhasil Di Update', 'success'); 
            return redirect()->back();
        }else{
        $gambar = $req->file('gambarberita');
       
        $this->validate($req, [
            'gambarberita' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'deskripsi' => 'required',
        ]);
        $path = 'GBERITA';
        $ext = $gambar->getClientOriginalExtension();
        $namafile = 'Gambar_'.date('d_y_t').".".$ext;
        $gambar->move($path, $namafile);
        $data = Berita::find($id)->update([
            'gberita' => $namafile,
            'judul'   => $judul,
            'tag'     => $tag,
            'deskripsi' => $deskripsi,
            'slugberita'=> Str::slug($judul),
        ]);
        Alert::toast('Berita Berhasil Di Update', 'success'); 
        return redirect()->back();
        }
    }
}
