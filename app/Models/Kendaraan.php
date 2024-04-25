<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'jenis_id',
        'nama_kendaraaan',
        'jadwal_servis',
        'sedang_servis',
        'konsumsi_bbm'
    ];

    public function jenisKendaraans(){
        return $this->belongsTo(JenisKendaraan::class);
    }
    
    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
