<?php

namespace App\Http\Controllers;

use App\KategoriProgram;
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
        $id = Program::where('tipe', 'NO')->first();
        $kategori = KategoriProgram::take(3)->get();
        $programs = Program::with('galeri_program','kategori_program')->take(3)->get();
        // $programs = Program::with(['kategori_program','galeri_program'])->get();
        // dd($id);
        return view('app-option',[ //app option
            'programs' => $programs,
            'kategori' => $kategori,
            'id' => $id
        ]);
    }

    public function soon(){
        return view('soon');
    }

    public function about(){
        return view('about');
    }

}
