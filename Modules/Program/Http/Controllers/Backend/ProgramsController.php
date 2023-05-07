<?php

namespace Modules\Program\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ProgramsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Programs';

        // module name
        $this->module_name = 'programs';

        // directory path of the module
        $this->module_path = 'program::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Program\Models\Program";
    }

}
