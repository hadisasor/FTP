<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Concerns\IsFilamentUser;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;



    protected $table = 'users';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fstname',
        'lstname',
        'email',
        'password',
        'phone',
        'userType',
    ];

     //one user can have many hajj packages function
    public function hajjPackages()
    {
        return $this->hasMany(HajjPackage::class);
    }

    //one user can have many umrah packages function
    public function umrahPackages()
    {
        return $this->hasMany(UmrahPackage::class);
    }

    
    public function reviews(){
        return $this->belongsToMany(Review::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];



    // To ensure the password is hashed in the database
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
  

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
