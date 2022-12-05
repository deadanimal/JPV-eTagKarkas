<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokTag extends Model
{
    use HasFactory;

    public function tag() {
        return $this->belongsTo(Tag::class);
    }
    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }
}
