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
        $id = Program::where('id', 5)->first();
        $kategori = KategoriProgram::take(3)->get();
        $programs = Program::with('galeri_program','kategori_program')->take(3)->get();
        // $programs = Program::with(['kategori_program','galeri_program'])->get();
        // dd($id);
        return view('app',[
            'programs' => $programs,
            'kategori' => $kategori,
            'id' => $id
        ]);
    }
}
