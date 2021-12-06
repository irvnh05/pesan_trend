<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProgramRequest;
use App\Program;
use App\KategoriProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Program::with(['kategori_program'])->get();

        return view('pages.admin.program.program.index',[
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
       $kategori_programs = KategoriProgram::all();
       return view('pages.admin.program.program.create',[
        'kategori_programs' => $kategori_programs
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->nama);

        Program::create($data);
        return redirect()->route('program.index');
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
        $item = Program::findOrFail($id);
        $kategori_programs = KategoriProgram::all();

        return view('pages.admin.program.program.edit',[
            'item' => $item,
            'kategori_programs' => $kategori_programs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        $item = Program::findOrFail($id);
    
        $item->update($data);

        return redirect()->route('program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Program::findOrFail($id);
        $item->delete();

        return redirect()->route('program.index');
    }
}
