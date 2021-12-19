<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\CheckoutRequest;
use App\Program;
use App\Transaction;
use App\TransactionDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp;
use Exception;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
         $item = Transaction::with(['detail','program','user'])->findOrFail($id);
         $cek = Transaction::with(['detail','program','user'])
        ->where('id',$id)
        ->whereHas('program', function($program){
            $program->where('nama', 'Proyek Langit');
        })
        ->first();  

        if($cek){
            return view('checkout-alternate',[
                    'item' => $item
        ]);
        }else{    
            return view('soon',[
             ]);
        }
    }

    public function create(Request $request,$id)
    {
        $cek = Program::findOrFail($id);
        $provinces = Province::pluck('name', 'id');

        return view('checkout-alternate',[
            'cek' => $cek,
            'provinces' => $provinces,
        ]);
    }

    public function success(Request $request, $id)
    {
        return view('sukses');
    }

      public function store(CheckoutRequest $request , $id)
    {                   
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'roles' => 'CALON',        
                'district_id'=> $request->district_id,
                'provinves_id'=> $request->provinves_id,
                'regency_id'=> $request->regency_id,
                'zip_code'=> $request->zip_code,      
                'alamat' => $request->alamat,    
            ]);
             $trx = 'PesanTrend-' . mt_rand(0000,9999);

             $transaction = Transaction::create([
                'users_id' => $user->id,
                'status_transaction' => 'KONFIRMASI',
                'programs_id' => $id,
                'no_transaction' => $trx
            ]);

             TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'nominal_programs' => '0'
            ]);
            
            $client = new Client(['headers' => ['X-Client-Code' => env('KEY_CODE')]]);

            $cek = Transaction::with(['program','user','detail'])
                    ->where('no_transaction',$transaction->no_transaction)
                    ->first();
        
            // $request_param = [
            //     'No Transaksi' => $transaction->no_transaction,
            //     'Nama' => $request->name,
            //     'email' => $request->email,
            //     'alamat' => $request->alamat,
            //     'provinsi' => $cek->user->province->name,
            //     'Kab/Kota' => $cek->user->regency->name,
            //     'Kecamatan' => $cek->user->districts->name,                 

            // ];
            $request_param = [
                "No Transaksi" => $transaction->no_transaction,
                "Nama" => $request->name,
                "Email" => $request->email,
                "Alamat" => $request->alamat,
                "Provinsi" => $cek->user->province->name,
                "Kab/Kota" => $cek->user->regency->name,
                "Kecamatan" => $cek->user->districts->name,  
                // 'Nama'     => $request['name'] ,                     
            ];
            
            $request_data = json_encode($request_param,JSON_PRETTY_PRINT );
            $res = $client->get(
                'https://wa.me/6287724499324?text=' 
                .($request_data) . '%20' ,
            ); 
            //  echo "Nama : ".$request['name'];               
            return $res->getBody()->getContents();
            // $res->getBody()->getContents();   
    }
}
