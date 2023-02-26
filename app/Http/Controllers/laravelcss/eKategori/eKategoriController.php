<?php

namespace App\Http\Controllers\laravelcss\eKategori;

use Redirect;
use App\eKategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eKategoriController extends Controller
{
    public function index()
    {
        $addekategori = eKategori::all();
        return view('laravelcss.eKategori.eKategori',compact('addekategori'));
    }
    public function create()
    {
        return view('laravelcss.eKategori.eKategori-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       eKategori::create($request->all());
       return redirect()->route('tampilan.ekategori');
    }
    public function edit($id)
    {
        $editekategori = eKategori::findorfail($id);
        return view('laravelcss.eKategori.eKategori-edit', compact('editekategori'));
    }
    public function update(Request $request,$id)
    {
        $editekategori = eKategori::findorfail($id);
        $editekategori->update($request->all());
        return redirect()->route('tampilan.ekategori');
    }
    public function destroy(Request $request,$id)
    {
        $editekategori = eKategori::findOrFail($id);
        $editekategori->delete($request->all());
        return redirect()->route('tampilan.ekategori');
    }
}
