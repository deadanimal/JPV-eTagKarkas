<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanHarian extends Model
{
    use HasFactory;
    public function pemeriksaan() {
        return $this->belongsTo(Pemeriksaan::class);
    }    
}
