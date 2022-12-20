<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanBabiHarian extends Model
{
    use HasFactory;

    public function pemeriksaan() {
        return $this->belongsTo(PengenalanBabi::class);
    }  
    
    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }
}
