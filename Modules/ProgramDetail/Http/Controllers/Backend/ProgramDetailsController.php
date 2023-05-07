<?php

namespace Modules\ProgramDetail\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ProgramDetailsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ProgramDetails';

        // module name
        $this->module_name = 'programdetails';

        // directory path of the module
        $this->module_path = 'programdetail::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ProgramDetail\Models\ProgramDetail";
    }

}
