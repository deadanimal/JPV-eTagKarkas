<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanDalamNegara extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function survelan(){
        return $this->hasMany(SurvelanAudit::class);
    }

    public function ncrobr(){
        return $this->hasMany(JadualNcsObr::class);
    }
}
