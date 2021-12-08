<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'kategori_programs_id',
        'nama',
        'keterangan',
        'harga',
        'date',
        'slug'	
    ];

    protected $hidden = [
       
    ];

    public function kategori_program(){
        return $this->belongsTo(KategoriProgram::class, 'kategori_programs_id','id');
    }

    public function galeri_program(){
        return $this->hasMany(GaleriProgram::class, 'programs_id','id');
    }
}
