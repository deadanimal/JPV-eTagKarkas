<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurvelanAudit extends Model
{
    use HasFactory;

    public function pdn() {
        return $this->belongsTo(PemeriksaanDalamNegara::class);
    }
}
