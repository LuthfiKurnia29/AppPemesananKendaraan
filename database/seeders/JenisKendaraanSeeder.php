<?php

namespace Database\Seeders;

use App\Models\JenisKendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('jenis_kendaraans')->delete();
        JenisKendaraan::create(['jenis_kendaraan' => 'penumpang', 'pemilik' => 'Perusahaan']);
        JenisKendaraan::create(['jenis_kendaraan' => 'barang', 'pemilik' => 'Perusahaan Penyewa']);
    }
}
