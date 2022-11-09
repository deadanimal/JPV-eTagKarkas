<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    public function pemeriksaan_harian() {
        return $this->hasMany(PemeriksaanHarian::class);
    }

    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }
}
