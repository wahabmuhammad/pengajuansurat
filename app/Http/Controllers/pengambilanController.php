<?php

namespace App\Http\Controllers;

use App\Models\datadiri;
use App\Models\dataLayanan;
use App\Models\layanan;
use App\Models\respon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class pengambilanController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $data = DB::table('tb_user')->where('tb_user.id', $user)
            ->join('tb_datadiri', 'tb_user.id', '=', 'tb_datadiri.user_fk')
            ->join('tb_layanan', 'tb_user.id', '=' ,'tb_layanan.id_user')
            ->join('tb_ketentuan', 'tb_layanan.id_ketentuan', '=', 'tb_ketentuan.id_ketentuan')
            ->get();
        return view('pengambilan.index', compact(
            'data'
        ));
    }

    public function indexAdmin()
    {
        $user = Auth::user()->id;
        $data = datadiri::all();
        // dd($data);
        return view('layout.admin.indexAdmin', compact('data'));
    }

    public function download($id)
    {
        $document = dataLayanan::findOrFail($id);

        // Ambil file path dari database
        $filename = $document->dokumentambahan;
        $filePath = storage_path("app/public/pdf/{$filename}");
        // Check apakah file ada

        // Mendapatkan nama asli file
        $originalName = pathinfo($filename, PATHINFO_FILENAME);

        // Mendapatkan tipe file
        $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
        
        // // Download file
        return response()->download($filePath,$filename);
    }

    public function printdatadiri(Request $request, $id)
    {  
        $data = datadiri::findOrFail($id);
        return view('layout.admin.cetak_datadiri', compact('data'));
    }

    public function suratpemohon(Request $request){
        $data = DB::table('tb_user')
            ->join('tb_datadiri', 'tb_user.id', '=', 'tb_datadiri.user_fk')
            ->join('tb_layanan', 'tb_user.id', '=' ,'tb_layanan.id_user')
            ->join('tb_ketentuan', 'tb_layanan.id_ketentuan', '=', 'tb_ketentuan.id_ketentuan')
            ->get();
        // dd($data);
        return view('layout.admin.indexsuratpemohon', compact('data'));
    }

    public function kirimsurat(){
        $data = DB::table('tb_user')
            ->join('tb_datadiri', 'tb_user.id', '=', 'tb_datadiri.user_fk')
            ->join('tb_layanan', 'tb_user.id', '=' ,'tb_layanan.id_user')
            ->join('tb_ketentuan', 'tb_layanan.id_ketentuan', '=', 'tb_ketentuan.id_ketentuan')
            ->get();
        $layanan = layanan::get();
        // dd ($data);
        return view('layout.admin.kirimsurat', compact('data','layanan'));
    }

    public function uploadData(Request $request){
        // dd($request);
        $request->validate([
            'dokumen' => 'required|mimes:pdf', // validasi untuk file PDF, maksimal 2MB
        ]);

        if ($request->hasFile('dokumen')) {
            $pdfFile = $request->file('dokumen');
            $fileName = time() . '_' . $pdfFile->getClientOriginalName();
            $filePath = $pdfFile->storeAs('public/pdf', $fileName); // simpan file di dalam direktori 'storage/app/pdfs'
            // Storage::put($filePath, $fileName);
            $insert = [
                'dokumen' => $fileName,
                'user_fk' => $request->userid,
                'status' => 'selesai',
            ];
            respon::create($insert);
            return redirect()->back();
        }
    }
}
