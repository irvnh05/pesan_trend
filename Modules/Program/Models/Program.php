<?php

namespace Modules\Program\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'programs';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\Program\database\factories\ProgramFactory::new();
    }
}
