<?php

namespace App\Http\Controllers\multiple\IndexMultiple;

use Redirect;
use App\IndexKode;
use App\IndexBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexMultipleController extends Controller
{
    public function index()
    {
        $addindexkode = IndexKode::all();
        //$addindexkode = IndexKode::with('brand')->get();
        $addindexbrand = IndexBrand::all();
        //$addindexbrand = IndexBrand::with('kode')->get();
        return view('multiple.IndexMultiple.IndexMultiple',compact('addindexkode','addindexbrand'));
    }
    public function create()
    {
        return view('multiple.IndexMultiple.IndexMultiple-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       $addindexkode = IndexKode::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
       ]);

       if($addindexkode->save()){
            $addindexbrand = IndexBrand::create([
                'brand' => $request->brand,
                'uom' => $request->uom,
                'price' => $request->price,
                'stock' => $request->stock,
            ]);
        }
       return redirect()->route('tampilan.indexmultiple');
    }
    public function edit($id)
    {
        $editindexkode = IndexKode::all()->findorfail($id);
        $editindexbrand = IndexBrand::all()->findorfail($id);
        return view('multiple.IndexMultiple.IndexMultiple-edit', compact('editindexbrand'));
    }
    public function update(Request $request,$id)
    {
        $editindex = Index::findorfail($id);
        $editindex->update($request->all());
        return redirect()->route('tampilan.indexmultiple');
    }
    public function destroy(Request $request,$id)
    {
        $editindex = Index::findOrFail($id);
        $editindex->delete($request->all());
        return redirect()->route('tampilan.indexmultiple');
    }
}
