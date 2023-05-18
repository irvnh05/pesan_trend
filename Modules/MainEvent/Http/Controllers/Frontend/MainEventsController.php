<?php

namespace Modules\MainEvent\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class MainEventsController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;
    public function __construct()
    {
        // Page Title
        $this->module_title = 'MainEvents';

        // module name
        $this->module_name = 'mainevents';

        // directory path of the module
        $this->module_path = 'mainevents';

        // module icon
        $this->module_icon = 'fa-regular clipboard-list';

        // module model name, path
        $this->module_model = "Modules\MainEvent\Models\MainEvent";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::latest()->paginate();

        return view(
            "mainevent::frontend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $id = decode_id($id);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::findOrFail($id);

        return view(
            "mainevent::frontend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular")
        );
    }
    /**
     * Display the package of the specified resource.
     *
     * @param  int  $id
     * @param  string  $slug
     * @return Response
     */
    public function package($id, $slug)
    {
        $id = decode_id($id);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Package';

        $$module_name_singular = $module_model::with('program', 'programcategory', 'programdetails', 'package')->find($id);

        if ($$module_name_singular->slug !== $slug) {
            return redirect()->route('frontend.mainevents.show', ['id' => encode_id($id), 'slug' => $$module_name_singular->slug]);
        }

        return view(
            "mainevent::frontend.$module_name.package",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular")
        );
    }

}
