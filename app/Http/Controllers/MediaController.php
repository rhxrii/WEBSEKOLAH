<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\LogoSekolah;
use Illuminate\Support\Str;

use App\Models\MDownload;
use App\Models\MLink;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function indexmediadownload(){
        $data = MDownload::orderBy('id', 'DESC')->get();
        $logo = LogoSekolah::get();
        return view('Dashboard/Media/MediaDownload/indexmediadownload', compact('data', 'logo'));
    }
    public function uploadmdownload(Request $req){
        $file = $req->file('filedownload');
       
        $this->validate($req, [
            'filedownload' => ['file', 'mimes:jpeg,png,jpg,docx,docs,pdf,xls,xlsx,ppt,pptx', 'max:4048'],
            'judul' => 'required',
        ]);
        $path = 'MDOWNLOAD';
        $ext = $file->getClientOriginalExtension();
        $namafile = Str::slug($req->judul, '_').'_'.date('d_y_t').".".$ext;
        $file->move($path, $namafile);
        $data = MDownload::create([
            'judul' => $req->judul,
            'filedownload'=> $namafile,
        ]);
        Alert::toast('Media Download Berhasil Di Update', 'success'); 
        return redirect()->back();
    }
    public function downloadfile($id){
        $data = MDownload::find($id);
        $namafile = $data->filedownload;

        return response()->download(public_path('MDOWNLOAD/'.$namafile), $namafile);
    }
    public function hapusdownloadfile($id){
        $data = MDownload::find($id)->delete();
        Alert::toast('Media Download Berhasil Di Hapus', 'success'); 
        return redirect()->back();
    }

    public function indexmedialink(){
        $data = MLink::orderBy('id', 'DESC')->get();
        $logo = LogoSekolah::get();
        return view('Dashboard/Media/MediaLink/indexmedialink', compact('data', 'logo'));
    }
    public function uploadmlink(Request $req){
        $data = MLink::create([
            'judul' => $req->judul,
            'link'  => $req->link,
        ]);
        Alert::toast('Media Link Berhasil Di Upload', 'success'); 
        return redirect()->back();
    }
    public function hapuslink($id){
        $data = MLink::find($id)->delete();
        Alert::toast('Media Link Berhasil Di Hapus', 'success'); 
        return redirect()->back();
    }
}
