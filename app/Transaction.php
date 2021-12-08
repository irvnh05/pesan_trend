<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'users_id',
        'programs_id',
        'status_transaction',
        'total',
        'no_transaction'
    ];

    protected $hidden = [
       
    ];

    public function program(){
        return $this->belongsTo(Program::class, 'programs_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'users_id','id');
    }
    public function detail(){
        return $this->hasMany(TransactionDetail::class, 'transactions_id','id');
    }
}
