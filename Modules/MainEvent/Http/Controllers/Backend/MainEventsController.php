<?php

namespace Modules\MainEvent\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class MainEventsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'MainEvents';

        // module name
        $this->module_name = 'mainevents';

        // directory path of the module
        $this->module_path = 'mainevent::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\MainEvent\Models\MainEvent";
    }

}
