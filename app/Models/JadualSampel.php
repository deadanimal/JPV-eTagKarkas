<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadualSampel extends Model
{
    use HasFactory;

    public function sampel() {
        return $this->belongsTo(Sampel::class);
    }
}
