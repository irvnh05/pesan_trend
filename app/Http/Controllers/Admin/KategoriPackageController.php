<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KategoriPackage;
use Illuminate\Support\Str;

class KategoriPackageController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = KategoriPackage::all();

        return view('pages.admin.package.kategori-package.index',[
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
       return view('pages.admin.package.kategori-package.create');
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
        $data['assets'] = $request->file('assets')->store('assets/galeri_kategori', 'public');
        $data['slug'] = Str::slug($request->nama);

        KategoriPackage::create($data);
        return redirect()->route('kategori-package.index');
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
        $item = KategoriPackage::findOrFail($id);

        return view('pages.admin.package.kategori-package.edit',[
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

        $item = KategoriPackage::findOrFail($id);
    
        $item->update($data);

        return redirect()->route('kategori-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = KategoriPackage::findOrFail($id);
        $item->delete();

        return redirect()->route('kategori-package.index');
    }
}
