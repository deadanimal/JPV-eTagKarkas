<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }

    public function pemeriksaan_harian() {
        return $this->hasMany(PemeriksaanHarian::class);
    }

    public function ante_mortem_ruminan() {
        return $this->hasMany(AnteMortemRuminan::class);
    }  

    public function post_mortem_ruminan() {
        return $this->hasMany(PostMortemRuminan::class);
    } 

    public function pemeriksaan_unggas() {
        return $this->hasMany(PemeriksaanUnggas::class);
    }

    public function ante_mortem_unggas() {
        return $this->hasMany(AnteMortemUnggas::class);
    } 

    public function post_mortem_unggas() {
        return $this->hasMany(PostMortemUnggas::class);
    } 

    public function pemeriksaan_babi() {
        return $this->hasMany(PengenalanBabi::class);
    }
}
