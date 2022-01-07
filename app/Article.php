<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Article extends Model
{
    use SoftDeletes;
    const LIMIT = 50;

    protected $fillable = [
        'id',	
        'nama',	
        'keterangan',	
        'assets'
    ];

     public function limit()
    {
        return Str::limit($this->keterangan, Article::LIMIT );
    }

    protected $hidden = [
       
    ];


}
