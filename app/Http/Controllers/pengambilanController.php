<?php

namespace App\Http\Controllers;

use App\Models\datadiri;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        return view('layout.admin.indexAdmin');
    }
}
