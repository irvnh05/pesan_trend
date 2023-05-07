<?php

namespace Modules\ProgramCategory\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class ProgramCategoriesController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'ProgramCategories';

        // module name
        $this->module_name = 'programcategories';

        // directory path of the module
        $this->module_path = 'programcategory::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\ProgramCategory\Models\ProgramCategory";
    }

}
