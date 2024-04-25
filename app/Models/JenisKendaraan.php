<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKendaraan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_kendaraan',
        'pemilik'
    ];

    public function kendaraans(){
        return $this->hasMany(Kendaraan::class);
    }
}
