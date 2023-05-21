<?php

namespace Modules\Transaction\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Midtrans\Config;
use Midtrans\Snap;


class TransactionsController extends Controller
{
    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Transactions';

        // module name
        $this->module_name = 'transactions';

        // directory path of the module
        $this->module_path = 'transactions';

        // module icon
        $this->module_icon = 'fa-regular clipboard-list';

        // module model name, path
        $this->module_model = "Modules\Transaction\Models\Transaction";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id, $slug = null, $package = null)
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
            "transaction::frontend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action', 'module_name_singular','package','slug')
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
            "transaction::frontend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular", 'posts')
        );
    }
    public function checkout()
    {
        // Set up Midtrans configuration
        \Midtrans\Config::$serverKey = 'SB-Mid-server-KyYB5hjIDPn_Vc8k_rlqPV9_';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    
        $params = array(
            'transaction_details' => array(
                'order_id' => uniqid(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
        );
    
        // Create Midtrans transaction
        $transaction = \Midtrans\Snap::createTransaction($params);
    
        // Redirect to Midtrans payment page
        return redirect($transaction->redirect_url);
    }
    public function checkoutManual()
    {

        // Redirect to success page
        return redirect('/transaction/success');
    }
    public function succes()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;

        // Redirect to Midtrans payment page
        return view(
            "transaction::frontend.$module_name.succes"
        );
    }
    
}
