<?php

namespace Modules\CategoryProgram\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProgram extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categoryprograms';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\CategoryProgram\database\factories\CategoryProgramFactory::new();
    }
}
