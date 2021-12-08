<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Command\ListCommand\FunctionEnumerator;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'transactions_id',
        'nominal_programs',
        // 'email'
        // 'whatsapp'
    ];

    protected $hidden = [
       
    ];

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transactions_id','id');
    }

}
