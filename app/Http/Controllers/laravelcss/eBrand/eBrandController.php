<?php

namespace App\Http\Controllers\laravelcss\eBrand;

use Redirect;
use App\eBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eBrandController extends Controller
{
    public function index()
    {
        $addebrand = eBrand::all();
        return view('laravelcss.eBrand.eBrand',compact('addebrand'));
    }
    public function create()
    {
        return view('laravelcss.eBrand.eBrand-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       eBrand::create($request->all());
       return redirect()->route('tampilan.ebrand');
    }
    public function edit($id)
    {
        $editebrand = eBrand::findorfail($id);
        return view('laravelcss.eBrand.eBrand-edit', compact('editebrand'));
    }
    public function update(Request $request,$id)
    {
        $editebrand = eBrand::findorfail($id);
        $editebrand->update($request->all());
        return redirect()->route('tampilan.ebrand');
    }
    public function destroy(Request $request,$id)
    {
        $editebrand = eBrand::findOrFail($id);
        $editebrand->delete($request->all());
        return redirect()->route('tampilan.ebrand');
    }
}
