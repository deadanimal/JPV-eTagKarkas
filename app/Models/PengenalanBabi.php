<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengenalanBabi extends Model
{
    use HasFactory;

    public function pemeriksaan() {
        return $this->belongsTo(Pemeriksaan::class);
    }  
    
    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }

    public function pemeriksaan_harian_babi() {
        return $this->hasMany(PemeriksaanBabiHarian::class);
    }

    public function pemeriksaan_babi() {
        return $this->hasMany(PemeriksaanRapiBabi::class);
    }
}
