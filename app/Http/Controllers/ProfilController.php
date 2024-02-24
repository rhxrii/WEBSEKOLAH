<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\LogoSekolah;
use App\Models\ProfilKepsek;
use App\Models\ProfilSekolah;
use App\Models\StrukturOrganisasi;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function indexkepsek(){
        $data = ProfilKepsek::get();
        $logo = LogoSekolah::get();
      
        return view('Dashboard/Profil/Kepsek/indexkepsek', compact('data', 'logo'));
    }
    public function uploadkepsek(Request $req){
       
        $nama = $req->nama;
        $sambutan = $req->sambutan;
        

        $data = ProfilKepsek::first();
        if($data == null){
         
            if($req->file('foto') == null){
                $data = ProfilKepsek::create([
                    'nama'         => $nama,
                    'sambutan'     => $sambutan,
            ]);
            Alert::toast('Kepsek Berhasil Di Update', 'success'); 
            return redirect()->back();
        }else{

            $foto = $req->file('foto');
       
            $this->validate($req, [
                'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            ]);
            $path = 'PROFIL';
            $ext = $foto->getClientOriginalExtension();
            $namafile = 'Kepsek_'.date('d_y_t').".".$ext;
            $foto->move($path, $namafile);
            $data = ProfilKepsek::create([
                'foto' => $namafile,
                'nama'   => $nama,
                'sambutan' => $sambutan,
           ]);
            Alert::toast('Kepsek Berhasil Di Update', 'success'); 
            return redirect()->back();
        }
        }elseif($data !== null){
            
            if($req->file('foto') == null){
                $data = ProfilKepsek::first()->update([
                    'nama'         => $nama,
                    'sambutan'     => $sambutan,
            ]);
            Alert::toast('Kepsek Berhasil Di Update', 'success'); 
            return redirect()->back();
        }elseif($req->file('foto') !== null){
            $foto = $req->file('foto');
       
            $this->validate($req, [
                'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            ]);
            $path = 'PROFIL';
            $ext = $foto->getClientOriginalExtension();
            $namafile = 'Kepsek_'.date('d_y_t').".".$ext;
            $foto->move($path, $namafile);
            $data = ProfilKepsek::first()->update([
                'foto' => $namafile,
              
           ]);
            Alert::toast('Kepsek Berhasil Di Update', 'success'); 
            return redirect()->back();
        }else{

            $foto = $req->file('foto');
       
            $this->validate($req, [
                'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            ]);
            $path = 'PROFIL';
            $ext = $foto->getClientOriginalExtension();
            $namafile = 'Kepsek_'.date('d_y_t').".".$ext;
            $foto->move($path, $namafile);
            $data = ProfilKepsek::first()->update([
                'foto' => $namafile,
                'nama'   => $nama,
                'sambutan' => $sambutan,
           ]);
            Alert::toast('Kepsek Berhasil Di Update', 'success'); 
            return redirect()->back();
        }
      }


    }


    public function indexsekolah(){
        $data = ProfilSekolah::get();
        $logo = LogoSekolah::get();
        return view('Dashboard/Profil/Sekolah/indexsekolah', compact('data', 'logo'));
    }
    public function uploadsekolah(Request $req){
        
        $tahun = $req->tahun;
        $deskripsi = $req->deskripsi;
        

        $data = ProfilSekolah::first();
       // dd($data);
        if($data == null){
         
            if($req->file('foto') == null){
                $data = ProfilSekolah::create([
                    'tahun'         => $tahun,
                    'deskripsi'     => $deskripsi,
                ]);
                Alert::toast('Profil Sekolah Berhasil Di Update', 'success'); 
                return redirect()->back();
            }else{

                $foto = $req->file('foto');
       
                 $this->validate($req, [
                    'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
                ]);
                $path = 'PROFIL';
                $ext = $foto->getClientOriginalExtension();
                $namafile = 'Sekolah_'.date('d_y_t').".".$ext;
                $foto->move($path, $namafile);
                $data = ProfilSekolah::create([
                    'foto' => $namafile,
                    'tahun'   => $tahun,
                    'deskripsi' => $deskripsi,
                ]);
                Alert::toast('Profil Sekolah Berhasil Di Update', 'success'); 
                return redirect()->back();
            }
        }elseif($data !== null){
            
            if($req->file('foto') == null){
                $data = ProfilSekolah::first()->update([
                    'tahun'         => $tahun,
                    'deskripsi'     => $deskripsi,
            ]);
            Alert::toast('Profil Sekolah Berhasil Di Update', 'success'); 
            return redirect()->back();
             }elseif($req->file('foto') !== null){
            $foto = $req->file('foto');
       
            $this->validate($req, [
                'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            ]);
            $path = 'PROFIL';
            $ext = $foto->getClientOriginalExtension();
            $namafile = 'Sekolah_'.date('d_y_t').".".$ext;
            $foto->move($path, $namafile);
            $data = ProfilSekolah::first()->update([
                'foto' => $namafile,
              
           ]);
            Alert::toast('Profil Sekolah Berhasil Di Update', 'success'); 
            return redirect()->back();
        }else{

            $foto = $req->file('foto');
       
            $this->validate($req, [
                'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
            ]);
            $path = 'PROFIL';
            $ext = $foto->getClientOriginalExtension();
            $namafile = 'Sekolah_'.date('d_y_t').".".$ext;
            $foto->move($path, $namafile);
            $data = ProfilSekolah::first()->update([
                'foto' => $namafile,
                'tahun'   => $tahun,
                'deskripsi' => $deskripsi,
           ]);
            Alert::toast('Profil Sekolah Berhasil Di Update', 'success'); 
            return redirect()->back();
        }
      }

    }


    public function indexvisimisi(){
        $data = VisiMisi::get();
        $logo = LogoSekolah::get();
        return view('Dashboard/Profil/VisiMisi/indexvisimisi', compact('data', 'logo'));
    }
    public function uploadvisimisi(Request $req){
        $data = VisiMisi::first();
        // dd($data);
         if($data == null){
          
             if($req->file('foto') == null){
                 Alert::toast('Tidak Ada Foto !', 'error'); 
                 return redirect()->back();
             }else{
 
                 $foto = $req->file('foto');
        
                  $this->validate($req, [
                     'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
                 ]);
                 $path = 'PROFIL';
                 $ext = $foto->getClientOriginalExtension();
                 $namafile = 'VisiMisi_'.date('d_y_t').".".$ext;
                 $foto->move($path, $namafile);
                 $data = VisiMisi::create([
                     'foto' => $namafile,
                 ]);
                 Alert::toast('Visi Misi Sekolah Berhasil Di Update', 'success'); 
                 return redirect()->back();
             }
         }elseif($data !== null){
             
             if($req->file('foto') == null){
                
             Alert::toast('Tidak Ada Foto !', 'error'); 
             return redirect()->back();
              }elseif($req->file('foto') !== null){
             $foto = $req->file('foto');
        
             $this->validate($req, [
                 'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
             ]);
             $path = 'PROFIL';
             $ext = $foto->getClientOriginalExtension();
             $namafile = 'VisiMisi_'.date('d_y_t').".".$ext;
             $foto->move($path, $namafile);
             $data = VisiMisi::first()->update([
                 'foto' => $namafile,
               
            ]);
             Alert::toast('Visi Misi Berhasil Di Update', 'success'); 
             return redirect()->back();
         }else{
 
             $foto = $req->file('foto');
        
             $this->validate($req, [
                 'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
             ]);
             $path = 'PROFIL';
             $ext = $foto->getClientOriginalExtension();
             $namafile = 'VisiMisi_'.date('d_y_t').".".$ext;
             $foto->move($path, $namafile);
             $data = VisiMisi   ::first()->update([
                 'foto' => $namafile,
                
            ]);
             Alert::toast('Visi Misi Berhasil Di Update', 'success'); 
             return redirect()->back();
            }
        }
    }


    public function indexstrukturorganisasi(){
        $data = StrukturOrganisasi::get();
        $logo = LogoSekolah::get();
        return view('Dashboard/Profil/StrukturOrganisasi/indexstrukturorganisasi', compact('data', 'logo'));
    }
    public function uploadstruktur(Request $req){
        $data = StrukturOrganisasi::first();
        // dd($data);
         if($data == null){
          
             if($req->file('foto') == null){
                 Alert::toast('Tidak Ada Foto !', 'error'); 
                 return redirect()->back();
             }else{
 
                 $foto = $req->file('foto');
        
                  $this->validate($req, [
                     'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
                 ]);
                 $path = 'PROFIL';
                 $ext = $foto->getClientOriginalExtension();
                 $namafile = 'Struktur_'.date('d_y_t').".".$ext;
                 $foto->move($path, $namafile);
                 $data = StrukturOrganisasi::create([
                     'foto' => $namafile,
                 ]);
                 Alert::toast('Struktur Organisasi Sekolah Berhasil Di Update', 'success'); 
                 return redirect()->back();
             }
         }elseif($data !== null){
             
             if($req->file('foto') == null){
                
             Alert::toast('Tidak Ada Foto !', 'error'); 
             return redirect()->back();
              }elseif($req->file('foto') !== null){
             $foto = $req->file('foto');
        
             $this->validate($req, [
                 'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
             ]);
             $path = 'PROFIL';
             $ext = $foto->getClientOriginalExtension();
             $namafile = 'Struktur_'.date('d_y_t').".".$ext;
             $foto->move($path, $namafile);
             $data = StrukturOrganisasi::first()->update([
                 'foto' => $namafile,
               
            ]);
            Alert::toast('Struktur Organisasi Sekolah Berhasil Di Update', 'success'); 
            return redirect()->back();
         }else{
 
             $foto = $req->file('foto');
        
             $this->validate($req, [
                 'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
             ]);
             $path = 'PROFIL';
             $ext = $foto->getClientOriginalExtension();
             $namafile = 'Struktur_'.date('d_y_t').".".$ext;
             $foto->move($path, $namafile);
             $data = StrukturOrganisasi::first()->update([
                 'foto' => $namafile,
                
            ]);
            Alert::toast('Struktur Organisasi Sekolah Berhasil Di Update', 'success'); 
            return redirect()->back();
            }
        }
    }
    
    public function indexlogo(){
        $data = LogoSekolah::get();
        $logo = LogoSekolah::get();
        return view('Dashboard/Profil/Logo/indexlogo', compact('data', 'logo'));
    }
    public function uploadlogo(Request $req){
        $data = LogoSekolah::first();
        // dd($data);
         if($data == null){
          
             if($req->file('foto') == null){
                 Alert::toast('Tidak Ada Foto !', 'error'); 
                 return redirect()->back();
             }else{
 
                 $foto = $req->file('foto');
        
                  $this->validate($req, [
                     'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
                 ]);
                 $path = 'PROFIL';
                 $ext = $foto->getClientOriginalExtension();
                 $namafile = 'Logo_'.date('d_y_t').".".$ext;
                 $foto->move($path, $namafile);
                 $data = LogoSekolah::create([
                     'foto' => $namafile,
                 ]);
                 Alert::toast('Logo Sekolah Berhasil Di Update', 'success'); 
                 return redirect()->back();
             }
         }elseif($data !== null){
             
             if($req->file('foto') == null){
                
             Alert::toast('Tidak Ada Foto !', 'error'); 
             return redirect()->back();
              }elseif($req->file('foto') !== null){
             $foto = $req->file('foto');
        
             $this->validate($req, [
                 'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
             ]);
             $path = 'PROFIL';
             $ext = $foto->getClientOriginalExtension();
             $namafile = 'Logo_'.date('d_y_t').".".$ext;
             $foto->move($path, $namafile);
             $data = LogoSekolah::first()->update([
                 'foto' => $namafile,
               
            ]);
            Alert::toast('Logo Sekolah Berhasil Di Update', 'success'); 
            return redirect()->back();
         }else{
 
             $foto = $req->file('foto');
        
             $this->validate($req, [
                 'foto' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
             ]);
             $path = 'PROFIL';
             $ext = $foto->getClientOriginalExtension();
             $namafile = 'Logo_'.date('d_y_t').".".$ext;
             $foto->move($path, $namafile);
             $data = LogoSekolah::first()->update([
                 'foto' => $namafile,
                
            ]);
            Alert::toast('Logo Sekolah Berhasil Di Update', 'success'); 
            return redirect()->back();
            }
        }
    }

}