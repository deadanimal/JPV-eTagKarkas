<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semak_borangA extends Model
{
    use HasFactory;

    public function semak_pemeriksaan_B() {
        return $this->hasOne(semak_borangB::class);
    }

    public function semak_pemeriksaan_C() {
        return $this->hasOne(semak_borangC::class);
    }

    public function semak_pemeriksaan_D() {
        return $this->hasOne(semak_borangD::class);
    }
}
