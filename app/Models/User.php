<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public $incrementing = true;

    public $timestamps = true;
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'mobile',
        'pincode',
        'address',
        'image'
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
        'password' => 'hashed',
    ];
    
    public function scopeSort($query, $orderBy, $orderType){
        $query->orderBy($orderBy, $orderType);
        return $query;
    }

    public function scopeFilter($query, $pramse){
        if($pramse && isset($pramse['search'])){
            $query->where('id', 'like', '%'.$pramse['search']. '%')
                ->orwhere('name', 'like', '%'.$pramse['search']. '%')
                ->orwhere('email', 'like', '%'.$pramse['search']. '%')
                ->orwhere('mobile', 'like', '%'.$pramse['search']. '%')
                ->orwhere('pincode', 'like', '%'.$pramse['search']. '%');
        }
        return $query;
    }
}
