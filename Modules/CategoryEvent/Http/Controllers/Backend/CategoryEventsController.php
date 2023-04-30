<?php

namespace Modules\CategoryEvent\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class CategoryEventsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'CategoryEvents';

        // module name
        $this->module_name = 'categoryevents';

        // directory path of the module
        $this->module_path = 'categoryevent::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\CategoryEvent\Models\CategoryEvent";
    }

}
