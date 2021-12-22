<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'roles',
        'district_id',
        'provinves_id',
        'regency_id', 
        'phone_number',
        'zip_code',  
        'alamat',
        'tgl_lahir', 
        'negara',	    
        'google_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function districts(){
        return $this->belongsTo(District::class, 'district_id','id');
    }
    public function province(){
        return $this->belongsTo(Province::class, 'provinves_id','id');
    }
    public function regency(){
        return $this->belongsTo(Regency::class, 'regency_id','id');
    }

}
