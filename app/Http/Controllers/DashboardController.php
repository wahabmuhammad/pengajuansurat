<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }

    //visi-misi Controller
    public function visimisi(){
        return view('dashboard.visimisi');
    }

    public function tentangkami(){
        return view('dashboard.tentangkami');
    }
}
