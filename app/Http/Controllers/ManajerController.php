<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class ManajerController extends Controller
{
    public function index()
    {
        $data = Pemesanan::with('driver', 'kendaraan')->get();
        return view('manajer.index', compact('data'));
    }

    public function setuju(Request $request, $id)
    {
        $validatedData = $request->validate([
            'status' => 'required',
        ]);
        Pemesanan::with('driver', 'kendaraan')->where('id', $id)->update($validatedData);
        // alert('Berhasil');
        return redirect('/manajer/pesanan');
    }
}
