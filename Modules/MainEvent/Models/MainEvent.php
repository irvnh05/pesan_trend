<?php

namespace Modules\MainEvent\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainEvent extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mainevents';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\MainEvent\database\factories\MainEventFactory::new();
    }
    
    public function program()
    {
        return $this->belongsTo(\Modules\Program\Models\Program::class, 'program_id');
    }
    
    public function programcategory()
    {
        return $this->belongsTo(\Modules\ProgramCategory\Models\ProgramCategory::class, 'program_id');
    }
    
    public function programdetails()
    {
        return $this->hasMany(\Modules\ProgramDetail\Models\ProgramDetail::class, 'program_id');
    }
    
    public function package()
    {
        return $this->hasManyThrough(
            \Modules\Package\Models\Package::class,
            \Modules\ProgramDetail\Models\ProgramDetail::class,
            'program_id',
            'id',
            'program_id',
            'package_id'
        );
    }
        

}
