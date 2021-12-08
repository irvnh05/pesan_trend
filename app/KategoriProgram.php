<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriProgram extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'keterangan',
        'slug'
    ];

    protected $hidden = [
       
    ];

 
}
