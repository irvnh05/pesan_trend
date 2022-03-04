<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'programs_id',
        'nama',
        'keterangan',
        'harga',
        'assets',
        'slug'
    ];

    protected $hidden = [
       
    ];

    public function programs(){
        return $this->belongsTo(Program::class, 'programs_id','id');
    }
}
