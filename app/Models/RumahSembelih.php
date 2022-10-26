<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSembelih extends Model
{
    use HasFactory;

    public function pengurus() {
        return $this->belongsTo(User::class);
    }    

    public function tag() {
        return $this->hasMany(Tag::class);
    }    
    
    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = json_encode($value);
    }

    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'] = json_decode($value);
    }    
}
