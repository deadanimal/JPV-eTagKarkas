<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSembelih extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasMany(User::class);
    }    

    public function tag() {
        return $this->hasMany(Tag::class);
    }      
}
