<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionsRequest;
use App\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Program;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Str;
use Carbon\Carbon;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request()->ajax()) {
            $query = Transaction::with([
                'program',
                'user.province',
                'user.regency',
                'user.districts',
                'detail', 
            ]); 

            //filter tanggal
            if (request()->start_date || request()->end_date) {
                 $start_date = Carbon::parse(request()->start_date)->format('Y-m-d') . ' 00:00:01';
                 $end_date = Carbon::parse(request()->end_date)->format('Y-m-d') . ' 23:59:59';
                 $query->whereBetween('created_at',[$start_date,$end_date])->get();
            } else {
                 $query->latest()->get();
            }

            $posts =$query->select('*');

            return Datatables::of($posts)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->id . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->id . '">
                                    <a class="dropdown-item" href="' . route('transaction.show', $item->id) . '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item" href="' . route('transaction.edit', $item->id) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('transaction.destroy', $item->id) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }  
        return view('pages.admin.transaksi.reservasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = Program::all();
        $item = Transaction::all();
            return view('pages.admin.transaksi.reservasi.create',[
                'item' => $item,
                'program' => $program,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = Program::where('id', '=', $request->programs_id)->first();
        $item = Transaction::create([
            'users_id' => Auth::user()->id,
            'programs_id' =>$request->programs_id,
            'total' =>$program->harga,
            'status_transaction' => 'Review',
            'no_transaction' => '0'
            ]);
        return redirect()->route('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaction::with([
            'detail','user','program'
        ])->findOrFail($id);

        return view('pages.admin.transaksi.reservasi.detail',[
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaction::findOrFail($id);

        return view('pages.admin.transaksi.reservasi.edit',[
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransactionsRequest $request, $id)
    {
        $data = $request->all();
        $item = Transaction::findOrFail($id);
    
        $item->update($data);

        return redirect()->route('transaction.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaction::findOrFail($id);
        $item->delete();

        return redirect()->route('transaction.index');
    }
}
