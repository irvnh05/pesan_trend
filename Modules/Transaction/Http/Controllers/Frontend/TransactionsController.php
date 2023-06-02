<?php

namespace Modules\Transaction\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\UserProfile;
use App\Models\User;
use Modules\MainEvent\Models\MainEvent;
use Modules\Transaction\Models\Transaction;

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
        
        $id_mainevent = decode_id($id);
        $mainevent = MainEvent::find($id_mainevent);
        $package_detail = MainEvent::where('slug', $package)->first();


        return view(
            "transaction::frontend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action', 'module_name_singular','package','slug','mainevent','package_detail')
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
    public function checkout(Request $request)
    {

        
        // Set up Midtrans configuration
        \Midtrans\Config::$serverKey = 'SB-Mid-server-KyYB5hjIDPn_Vc8k_rlqPV9_';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    
        // Validate email format
        $email = $request->input('email');
        $first_name = $request->input('nama_depan');
        $last_name = $request->input('nama_belakang');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email format']);
        }

        $user = User::updateOrCreate(
            ['email' => $email],
            ['first_name' => $first_name],
            // ['name' => $first_name . ' ' . $last_name]
        );
        
        $userProfile = UserProfile::updateOrCreate(
            ['user_id' => $user->id],
            ['email' => $email, 'first_name' => $first_name],
            // ['name' => $first_name . ' ' . $last_name]
        );
        
        $params = array(
            'transaction_details' => array(
                'order_id' => uniqid(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => $request->input('nama_depan'),
                'email' => $email,
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
