<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }   
    
    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }
    public function stok_tag() {
        return $this->hasMany(StokTag::class);
    }  
    
}
