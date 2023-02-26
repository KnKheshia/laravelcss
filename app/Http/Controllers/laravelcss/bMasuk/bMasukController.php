<?php

namespace App\Http\Controllers\laravelcss\bMasuk;

use Redirect;
use App\bMasuk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bMasukController extends Controller
{
    public function index()
    {
        $addbmasuk = bMasuk::all();
        return view('laravelcss.bMasuk.bMasuk',compact('addbmasuk'));
    }
    public function create()
    {
        return view('laravelcss.bMasuk.bMasuk-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       bMasuk::create($request->all());
       return redirect()->route('tampilan.bmasuk');
    }
    public function edit($id)
    {
        $editbmasuk = bMasuk::findorfail($id);
        return view('laravelcss.bMasuk.bMasuk-edit', compact('editbmasuk'));
    }
    public function update(Request $request,$id)
    {
        $editbmasuk = bMasuk::findorfail($id);
        $editbmasuk->update($request->all());
        return redirect()->route('tampilan.bmasuk');
    }
    public function destroy(Request $request,$id)
    {
        $editbmasuk = bMasuk::findOrFail($id);
        $editbmasuk->delete($request->all());
        return redirect()->route('tampilan.bmasuk');
    }
}
