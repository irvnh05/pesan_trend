<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class DetailController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( $slug)
    {
       $programs = Program::with(['galeri_program','kategori_program'])->where('slug', $slug)->firstOrFail();

        return view('detail', [
            'programs' => $programs
        ]);
    }

    public function detail( )
    {
        return view('detail');
    }
}
