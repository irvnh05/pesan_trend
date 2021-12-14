<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KategoriProgramRequest;
use App\KategoriProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = KategoriProgram::all();

        return view('pages.admin.program.kategori-program.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.admin.program.kategori-program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KategoriProgramRequest $request)
    {
        $data = $request->all();
        $data['assets'] = $request->file('assets')->store('assets/galeri_kategori', 'public');
        $data['slug'] = Str::slug($request->nama);

        KategoriProgram::create($data);
        return redirect()->route('kategori-program.index');
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
        $item = KategoriProgram::findOrFail($id);

        return view('pages.admin.program.kategori-program.edit',[
            'item' => $item
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

        $data['assets'] = $request->file('assets')->store('assets/galeri_kategori', 'public');
        $data['slug'] = Str::slug($request->nama);

        $item = KategoriProgram::findOrFail($id);
    
        $item->update($data);

        return redirect()->route('kategori-program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = KategoriProgram::findOrFail($id);
        $item->delete();

        return redirect()->route('kategori-program.index');
    }
}
