<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'nama',
        'keterangan',
        'harga',
        'assets',
        'slug'
    ];

    protected $hidden = [
       
    ];

}
