<?php

namespace App\Http\Controllers;

use Alert;
use Illuminate\Support\Str;

use App\Models\MDownload;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function indexmediadownload(){
        $data = MDownload::orderBy('id', 'DESC')->get();
        return view('Dashboard/Media/MediaDownload/indexmediadownload', compact('data'));
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
}
