<?php

namespace App\Http\Controllers;

use App\KategoriProgram;
use App\Program;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

    public function artikeldetail(){
        return view('artikel-detail');
    }

    public function artikel(Request $request){
        // return view('artikel');

         $article = Article::paginate(3);

        if ($request->ajax()) {
            $html = '';

            foreach ($article as $artikel) {
                // $html.='<div class="mt-5"><h1>'.$artikel->nama.'</h1><p>'.$artikel->keterangan.'</p></div>';
                  $html.='<div class="col-md-4 col-sm-12 mb-3">
                                <div class="card">
                                    <img src="pesantrend-template/frontend/images/study.png"  class="card-img-top p-3" alt="...">
                        
                                    <div class="card-body">
                                        <div class="card-title"><h4>'.$artikel->nama.'</h4></div>
                                        '.Str::limit($artikel->keterangan, 50).'
                                        <a href=".{{ route("artikeldetail", '.$artikel->id.') }}.">link</a>  
                                    </div>
                                </div>
                            </div>';
            }

           
            return $html;
        }

        
        return view('artikel');
        
    }

    

}
