<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rumah_sembelih() {
        return $this->belongsTo(RumahSembelih::class);
    }

    public function tags() {
        return $this->hasMany(User::class);
    }  
    
    public function sampel() {
        return $this->hasMany(Sampel::class);
    } 

    public function notifikasi() {
        return $this->hasMany(Notifikasi::class);
    } 

    public function survelan() {
        return $this->hasMany(PemeriksaanDalamNegara::class);
    }

    public function post_mortem_ruminan() {
        return $this->hasMany(PostMortemRuminan::class);
    }
}
