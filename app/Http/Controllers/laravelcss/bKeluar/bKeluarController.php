<?php

namespace App\Http\Controllers\laravelcss\bKeluar;

use Redirect;
use App\bKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bKeluarController extends Controller
{
    public function index()
    {
        $addbkeluar = bKeluar::all();
        return view('laravelcss.bKeluar.bKeluar',compact('addbkeluar'));
    }
    public function create()
    {
        return view('laravelcss.bKeluar.bKeluar-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       bKeluar::create($request->all());
       return redirect()->route('tampilan.bkeluar');
    }
    public function edit($id)
    {
        $editbkeluar = bKeluar::findorfail($id);
        return view('laravelcss.bKeluar.bKeluar-edit', compact('editbkeluar'));
    }
    public function update(Request $request,$id)
    {
        $editbkeluar = bKeluar::findorfail($id);
        $editbkeluar->update($request->all());
        return redirect()->route('tampilan.bkeluar');
    }
    public function destroy(Request $request,$id)
    {
        $editbkeluar = bKeluar::findOrFail($id);
        $editbkeluar->delete($request->all());
        return redirect()->route('tampilan.bkeluar');
    }
}
