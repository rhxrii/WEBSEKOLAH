<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Foto;
use App\Models\Informasi;
use App\Models\MDownload;
use App\Models\MLink;
use App\Models\ProfilKepsek;
use App\Models\ProfilSekolah;
use App\Models\StrukturOrganisasi;
use App\Models\Video;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function indexdepan(){
        $video = Video::first();
        $info = Informasi::limit(6)->get();
        $ber = Berita::limit(6)->get();
        $link = MLink::get();
        $foto = Foto::limit(6)->get();
        $tentang = ProfilSekolah::first();
        //dd($info);
        return view('Depan/index', compact('video', 'info', 'ber', 'link', 'foto', 'tentang'));
    }
    public function informasi(){
        $link = MLink::get();
        $info = Informasi::simplePaginate(9);

        return view('Depan/Informasi/informasi', compact('link', 'info'));
    }
    public function bacainformasi($id){
        $info = Informasi::find($id);
        $link = MLink::get();

        return view('Depan/Informasi/baca', compact('info', 'link'));
    }
    public function berita(){
        $link = MLink::get();
        $berita = Berita::simplePaginate(9);

        return view('Depan/Berita/berita', compact('link', 'berita'));
    }
    public function bacaberita($id){
        $berita = Berita::find($id);
        $link = MLink::get();

        return view('Depan/Berita/baca', compact('berita', 'link'));
    }
    public function tentang(){
        $link = MLink::get();
        $tentang = ProfilSekolah::first();
        return view('Depan/Tentang/baca', compact('tentang', 'link'));
    }

    public function galeri(){
        $link = MLink::get();
        return view('Depan/Galeri/galeri', compact('link'));
    }
    public function galerifoto(){
        $link = MLink::get();
        $foto = Foto::simplePagination(6);

        return view('Depan/Galeri/foto', compact('foto', 'link'));
    }
    public function galerivideo(){
        $link = MLink::get();
        $video = Video::limit(6)->get();
        return view('Depan/Galeri/video', compact('video', 'link'));
    }

    public function sekolah(){
        $link = MLink::get();
        $sekolah = ProfilSekolah::first();
        return view('Depan/Profil/sekolah', compact(
            'link',
            'sekolah'
        ));
    }
    
    public function kepsek(){
        $link = MLink::get();
        $kepsek = ProfilKepsek::first();
        return view('Depan/Profil/kepsek', compact(
            'link',
            'kepsek'
        ));
    }
    public function visimisi(){
        $link = MLink::get();
        $visimisi = VisiMisi::first();
        return view('Depan/Profil/visimisi', compact(
            'link',
            'visimisi'
        ));
    }
    public function struktur(){
        $link = MLink::get();
        $visimisi = StrukturOrganisasi::first();
        return view('Depan/Profil/struktur', compact(
            'link',
            'visimisi'
        ));
    }
    public function agenda(){
        $link = MLink::get();
        $data = Agenda::orderBy('id', 'DESC')->get();
        return view('Depan/Media/agenda', compact(
            'link',
            'data'
        ));
    }
    public function download(){
        $link = MLink::get();
        $data = MDownload::orderBy('id', 'DESC')->get();
        return view('Depan/Media/download', compact(
            'link',
            'data'
        ));
    }
    public function dd($id){
        $data = MDownload::find($id);
        $namafile = $data->filedownload;

        return response()->download(public_path('MDOWNLOAD/'.$namafile), $namafile);
    }

    public function privacy(){
        $link = MLink::get();
        return view('Depan/privacy', compact(
            'link',
        ));
    }
    public function terms(){
        $link = MLink::get();
        return view('Depan/terms', compact(
            'link',
        ));
    }
}
