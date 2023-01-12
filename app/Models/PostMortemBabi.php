<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMortemBabi extends Model
{
    use HasFactory;

    public function pemeriksaan() {
        return $this->belongsTo(PengenalanBabi::class);
    }  
    
    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
