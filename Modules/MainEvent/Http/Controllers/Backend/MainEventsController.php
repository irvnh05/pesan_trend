<?php

namespace Modules\MainEvent\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Support\Str;

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
    public function edit($id)
    {

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);
        // $mainevent 

        $module_action = 'Edit';

        $$module_name_singular = $module_model::findOrFail($id);
        return view('mainevent::backend.mainevents.edit', compact('id','module_title','module_path', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular"));
        // return view(
        //     "mainevent::frontend.$module_name.show",
        //     compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular")
        // );
    }
}
