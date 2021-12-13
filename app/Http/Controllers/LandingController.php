<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $programs = Program::with(['kategori_program','galeri_program'])->get();
        return view('app',[
            'programs' => $programs
        ]);
    }
}
