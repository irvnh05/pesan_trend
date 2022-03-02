<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPackage extends Model
{
    protected $fillable = [
          'packages_id',
          'nama',
          'keterangan',
          'harga',
          'assets',
          'slug'
    ];

    protected $hidden = [
       
    ];

    public function packages(){
        return $this->belongsTo(KategoriPackage::class, 'packages_id','id');
    }


}
