<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semak_borangB extends Model
{
    use HasFactory;

    public function semak() {
        return $this->belongsTo(semak_borangA::class);
    }  
}
