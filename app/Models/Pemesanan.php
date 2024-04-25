<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'kendaraan_id',
        'user_id',
        'disetujui_atasan',
        'tujuan',
        'tanggal_pinjam'
    ];

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    public function driver()
    {
        return $this->belongsTo('App\Models\Driver');
    }

    public function kendaraan()
    {
        return $this->belongsTo('App\Models\Kendaraan');
    }
}
