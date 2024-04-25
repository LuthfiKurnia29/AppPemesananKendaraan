<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\User;

class PemesananController extends Controller
{
    //
    public function index()
    {
        $data = Pemesanan::with(['user', 'driver', 'kendaraan'])->get();
        // dd($data);
        return view('Pemesanan.index', compact('data'));
    }

    public function createView(){
        $drivers = Driver::all();
        $kendaraans = Kendaraan::all();
        $manajers = User::with('roles')->get();
        return view('Pemesanan.create', compact('drivers', 'kendaraans', 'manajers'));
    }
    public function create(Request $request)
    {
        $data = $request->validate([
            'driver_id' => 'required',
            'kendaraan_id' => 'required',
            'user_id' => 'required',
            'tujuan' => 'required',
            'tanggal_pinjam' => 'required'
        ]);

        Pemesanan::create($data);

        return redirect('/pemesanan');
    }
}
