<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GaleriProgram extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'programs_id','assets'
    ];

    protected $hidden = [
       
    ];

    public function kategori_program(){
        return $this->belongsTo(Program::class, 'programs_id','id');
    }
}
