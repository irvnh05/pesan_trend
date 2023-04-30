<?php

namespace Modules\CategoryProgram\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class CategoryProgramsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'CategoryPrograms';

        // module name
        $this->module_name = 'categoryprograms';

        // directory path of the module
        $this->module_path = 'categoryprogram::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\CategoryProgram\Models\CategoryProgram";
    }

}
