<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\datadiri;
use App\Models\dataLayanan;
use App\Models\layanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengajuanController extends Controller
{
    public function index(){
        $user = Auth::user()->id;
        $cek = DB::table('tb_datadiri')->where('user_fk', $user)->first();
        $layanan = layanan::all();
        // dd($layanan);
        return view('pengajuan.index', compact('cek','layanan'));
    }

    public function datadiri(Request $request){
        $user = Auth::user()->id;
        $validasi = $request->validate([
            'nama' => 'required',
            'nik' => 'required|max:255',
            'kelamin' => 'required',
            'kawin' => 'required',
            'email' => 'required|email',
            'nohp' => 'required|max:255',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'rt_rw' => 'required'
        ],[
            'nama.required' => 'Form wajib Diisi',
            'nik.required' => 'NIK wajib diisi',
            'kelamin.required' => 'Jenis Kelamin wajib dipilih',
            'kawin.required' => 'Status Perkawinan harus dipilih',
            'email.required' => 'Email wajib diisi',
            'nohp.required' => 'No HP wajib diisi',
            'kabupaten.required' => 'Kabupaten wajib diisi',
            'kecamatan.required' => 'Kecamatan wajib diisi',
            'desa.required' => 'Desa wajib diisi',
            'rt_rw.required' => 'Rt - RW wajib diisi'
        ]);
        $insert = [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jeniskelamin' => $request->kelamin,
            'status' => $request->kawin,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'rt_rw' => $request->rt_rw,
            'user_fk' => $user
        ];
        datadiri::create($insert);
        return redirect()->back();
    }

    public function updatediri(Request $request, $id){
        $user = Auth::user()->id;
        $validasi = $request->validate([
            'nama' => 'required',
            'nik' => 'required|max:255',
            'kelamin' => 'required',
            'kawin' => 'required',
            'email' => 'required|email',
            'nohp' => 'required|max:255',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'rt_rw' => 'required'
        ],[
            'nama.required' => 'Form wajib Diisi',
            'nik.required' => 'NIK wajib diisi',
            'kelamin.required' => 'Jenis Kelamin wajib dipilih',
            'kawin.required' => 'Status Perkawinan harus dipilih',
            'email.required' => 'Email wajib diisi',
            'nohp.required' => 'No HP wajib diisi',
            'kabupaten.required' => 'Kabupaten wajib diisi',
            'kecamatan.required' => 'Kecamatan wajib diisi',
            'desa.required' => 'Desa wajib diisi',
            'rt_rw.required' => 'Rt - RW wajib diisi'
        ]);
        $insert = [
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jeniskelamin' => $request->kelamin,
            'status' => $request->kawin,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'rt_rw' => $request->rt_rw,
            'user_fk' => $user
        ];
        $datadiri = Datadiri::findOrFail($id);
        // Update the record with validated data
        $datadiri->update($insert);    
        return redirect()->back()->with('success', 'Item updated successfully.');
    }

    // Upload data
    public function uploadData(Request $request)
    {
        // dd($request);
        $request->validate([
            'layanan' => 'required',
            'dokumen' => 'required|mimes:pdf', // validasi untuk file PDF, maksimal 2MB
        ]);

        if ($request->hasFile('dokumen')) {
            $pdfFile = $request->file('dokumen');
            $fileName = time() . '_' . $pdfFile->getClientOriginalName();
            $filePath = $pdfFile->storeAs('public/pdf', $fileName);// simpan file di dalam direktori 'storage/app/pdfs'
            // Storage::put($filePath, $fileName);
            $insert = [
                'id_ketentuan' => $request->layanan,
                'dokumentambahan' => $fileName
            ];
            DB::table('tb_layanan')->insert($insert);
            // Proses penyimpanan file PDF di dalam database atau di lokasi yang sesuai dengan kebutuhan aplikasi Anda
            // Contoh: simpan $filePath ke dalam database
            return redirect()->back()->with('success', 'File PDF berhasil diupload.');
        }
    }
}
