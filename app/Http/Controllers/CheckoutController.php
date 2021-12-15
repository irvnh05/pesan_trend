<?php

namespace App\Http\Controllers;

use App\Program;
use App\Transaction;
use App\TransactionDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Regency;

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
            // 'item' => $item
             ]);
        }
    }

    public function process(Request $request, $id)
    {
        // $program = Program::findOrFail($id);
        // $cek = Program::where('id',$id)
        // ->where('nama', 'Proyek Langit')
        // ->first();  

        // if($cek){
        //     $transaction = Transaction::create([
        //         // 'users_id' => Auth::user()->id,
        //         'programs_id' => $id,
        //         'status_transaction' => 'CART',
        //         // 'additional_visa' => 0,
        //         // 'transaction_total' => $program->price,
           
        //     ]);

    
        //     TransactionDetail::create([
        //         'transactions_id' => $transaction->id,
        //         // 'username' => Auth::user()->username,
        //         // 'nationality' => 'ID',
        //         // 'is_visa' => false,
        //         // 'doe_passport' => Carbon::now()->addYears(5)
        //     ]);

        //     return redirect()->route('checkout', $transaction->id);
        //      echo "sukses";

        // }else{    

        //     return view('soon',[
        //     // 'item' => $item
        //      ]);
        // }
        
    }

    public function remove(Request $request, $detail_id)
    {
        // $item = TransactionDetail::findorFail($detail_id);

        // $transaction = Transaction::with(['details','travel_package'])
        //     ->findOrFail($item->transactions_id);

        // if($item->is_visa)
        // {
        //     $transaction->transaction_total -= 190;
        //     $transaction->additional_visa -= 190;
        // }

        // $transaction->transaction_total -= $transaction->travel_package->price;

        // $transaction->save();
        // $item->delete();

        // return redirect()->route('checkout', $item->transactions_id);
    }


    public function create(Request $request,$id)
    {
        $cek = Program::findOrFail($id);
        $provinces = Province::pluck('name', 'id');
        // $regencies = Regency::where('province_id', $request->get('id'))
        //     ->pluck('name', 'id');
    
        // return response()->json($cities);

        // dd($cek);
        return view('checkout-alternate',[
            'cek' => $cek,
             'provinces' => $provinces,
                        //   'regencies' => $regencies,
        ]);
        // $request->validate([
        //     'username' => 'required|string|exists:users,username',
        //     'is_visa' => 'required|boolean',
        //     'doe_passport' => 'required',
        // ]);

        // $data = $request->all();
        // $data['transactions_id'] = $id;

        // TransactionDetail::create($data);

        // $transaction = Transaction::with(['travel_package'])->find($id);

        // if($request->is_visa)
        // {
        //     $transaction->transaction_total += 190;
        //     $transaction->additional_visa += 190;
        // }

        // $transaction->transaction_total += $transaction->travel_package->price;

        // $transaction->save();

        // return redirect()->route('checkout', $id);
    }

    public function success(Request $request, $id)
    {
        // $transaction = Transaction::findOrFail($id);
        // $transaction->status_transaction = 'PENDING';

        // $transaction->save();

        return view('sukses');
    }

      public function store(Request $request , $id)
    {
        // $program = Program::findOrFail($id);
        // Transaction::create($request);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'roles' => 'CALON',               
            ]);

             $transaction = Transaction::create([
                'users_id' => $user->id,
                'status_transaction' => 'TEST',
                'programs_id' => $id,
            ]);

             TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'nominal_programs' => '0'
            ]);

        
             return view('sukses');
    }


}
