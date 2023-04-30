<?php

namespace Modules\CategoryEvent\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryEvent extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categoryevents';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\CategoryEvent\database\factories\CategoryEventFactory::new();
    }
}
