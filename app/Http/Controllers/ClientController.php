<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Foto;
use App\Models\Informasi;
use App\Models\MLink;
use App\Models\Video;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function indexdepan(){
        $video = Video::first();
        $info = Informasi::limit(6)->get();
        $berita = Berita::limit(6)->get();
        $link = MLink::get();
        $foto = Foto::get();
        //dd($info);
        return view('Depan/index', compact('video', 'info', 'berita', 'link', 'foto'));
    }
    public function bacainformasi($id){
        $info = Informasi::find($id);
        $link = MLink::get();

        return view('Depan/Informasi/baca', compact('info', 'link'));
    }
    public function bacaberita($id){
        $berita = Berita::find($id);
        $link = MLink::get();

        return view('Depan/Berita/baca', compact('berita', 'link'));
    }
}
