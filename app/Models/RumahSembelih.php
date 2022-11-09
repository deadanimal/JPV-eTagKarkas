<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSembelih extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasMany(User::class);
    }    

    public function tag() {
        return $this->hasMany(Tag::class);
    }   
    
    public function pemeriksaan_harian() {
        return $this->hasMany(PemeriksaanHarian::class);
    }  
    
    // public function setCategoryAttribute($value)
    // {
    //     $this->attributes['category'] = json_encode($value);
    // }

    // public function getCategoryAttribute($value)
    // {
    //     return $this->attributes['category'] = json_decode($value);
    // }    
}
