<?php

namespace Modules\Transaction\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'transactions';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Transaction\database\factories\TransactionFactory::new();
    }
    // Define the relationship with Mainevent
    public function mainevent()
    {
        return $this->belongsTo(\Modules\MainEvent\Models\Mainevent::class);
    }

    // Define the relationship with Package
    public function package()
    {
        return $this->belongsTo(\Modules\Package\Models\Package::class);
    }

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(\app\Models\User::class);
    }


    
}
