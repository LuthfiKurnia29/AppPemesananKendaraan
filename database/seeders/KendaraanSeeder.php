<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kendaraans')->delete();
        Kendaraan::create(['jenis_id' => 2, 'nama_kendaraan' => 'APV']);
        Kendaraan::create(['jenis_id' => 1, 'nama_kendaraan' => 'L300']);
    }
}
