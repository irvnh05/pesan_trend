<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GaleriProgramRequest;
use App\GaleriProgram;
use App\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GaleriProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = GaleriProgram::with(['program'])->get();

        return view('pages.admin.program.galeri-program.index',[
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
       $programs = Program::all();
       return view('pages.admin.program.galeri-program.create',[
           'programs' => $programs
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriProgramRequest $request)
    {
        $data = $request->all();
        $data['assets'] = $request->file('assets')->store(
            'assets/galeri_program','public'
        );

        GaleriProgram::create($data);
        return redirect()->route('galeri-program.index');
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
        
        $item = GaleriProgram::findOrFail($id);
        $programs = Program::all();

        return view('pages.admin.program.galeri-program.edit',[
            'item' => $item,
            'programs' => $programs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GaleriProgramRequest $request, $id)
    {
        $data = $request->all();
        $data['assets'] = $request->file('assets')->store(
            'assets/galeri_program','public'
        );
        
        $item = GaleriProgram::findOrFail($id);
    
        $item->update($data);

        return redirect()->route('galeri-program.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = GaleriProgram::findOrFail($id);
        $item->delete();

        return redirect()->route('galeri-program.index');
    }
}
