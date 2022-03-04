<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Package;
use App\KategoriPackage;
use App\Program;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class PackageController extends Controller

{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Package::with('programs')->get();

        return view('pages.admin.package.package.index',[
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
       $package = Package::all();
       $program = Program::all();
       
       return view('pages.admin.package.package.create',[
        'package' => $package,
        'program' => $program
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
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        Package::create($data);
        return redirect()->route('package.index');
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
        $item = Package::findOrFail($id);
        $programs = Program::all();

        return view('pages.admin.package.package.edit',[
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
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama);

        $item = Package::findOrFail($id);
    
        $item->update($data);

        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Package::findOrFail($id);
        $item->delete();

        return redirect()->route('package.index');
    }
}
