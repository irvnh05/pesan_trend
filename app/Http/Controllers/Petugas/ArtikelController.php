<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $categories = Article::paginate(2);
        // $items = Article::all();
        $search =  $request->input('search');
        if($search!=""){
            $artikel = Article::where(function ($query) use ($search){
                $query->where('nama', 'like', '%'.$search.'%');
                    // ->orWhere('keterangan', 'like', '%'.$search.'%');
            })
            ->paginate(2);
            $artikel->appends(['search' => $search]);
        }
        else{
            $artikel = Article::paginate(5);
        }

        return View('pages.petugas.artikel.konten-artikel.index')->with('data',$artikel);
        // dd($artikel);
        // return view('pages.petugas.artikel.konten-artikel.index',[
        //     'categories' => $categories,
        //     'items' => $items,
        //     'artikel' => $artikel
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = Article::all();
            return view('pages.petugas.artikel.konten-artikel.create',[
                'item' => $item,
            ]);
    }

    public function upload(Request $request)
    {
    if($request->hasFile('upload')) {
        //get filename with extension
        $filenamewithextension = $request->file('upload')->getClientOriginalName();
   
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
   
        //get file extension
        $extension = $request->file('upload')->getClientOriginalExtension();
   
        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
   
        //Upload File
        $request->file('upload')->storeAs('public/uploads', $filenametostore);
 
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('storage/uploads/'.$filenametostore); 
        $msg = 'Image successfully uploaded'; 
        $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
          
        // Render HTML output 
        @header('Content-type: text/html; charset=utf-8'); 
        echo $re;
      }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['assets'] = $request->file('assets')->store('assets/galeri_artikel', 'public');
        // $data['slug'] = Str::slug($request->nama);

        Article::create($data);
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Article::findOrFail($id);

        return view('pages.petugas.artikel.konten-artikel.edit',[
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
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // $data['slug'] = Str::slug($request->nama);

        $item = Article::findOrFail($id);
    
        $item->update($data);

        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Article::findOrFail($id);
        $item->delete();

        return redirect()->route('article.index');
    }
}
