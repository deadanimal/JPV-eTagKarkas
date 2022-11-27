<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanBabi extends Model
{
    use HasFactory;

    public function pemeriksaan() {
        return $this->belongsTo(Pemeriksaan::class);
    }  
    
    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }
}
