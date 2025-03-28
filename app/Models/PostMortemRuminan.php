<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMortemRuminan extends Model
{
    use HasFactory;

    public function pemeriksaan() {
        return $this->belongsTo(Pemeriksaan::class);
    }  
    
    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
