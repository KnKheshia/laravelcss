<?php

namespace App\Http\Controllers\laravelcss\Satuan;

use Redirect;
use App\Satuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SatuanController extends Controller
{
    public function index()
    {
        $addsatuan = Satuan::all();
        return view('laravelcss.Satuan.Satuan',compact('addsatuan'));
    }
    public function create()
    {
        return view('laravelcss.Satuan.Satuan-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       Satuan::create($request->all());
       return redirect()->route('tampilan.satuan');
    }
    public function edit($id)
    {
        $editsatuan = Satuan::findorfail($id);
        return view('laravelcss.Satuan.Satuan-edit', compact('editsatuan'));
    }
    public function update(Request $request,$id)
    {
        $editsatuan = Satuan::findorfail($id);
        $editsatuan->update($request->all());
        return redirect()->route('tampilan.satuan');
    }
    public function destroy(Request $request,$id)
    {
        $editsatuan = Satuan::findOrFail($id);
        $editsatuan->delete($request->all());
        return redirect()->route('tampilan.satuan');
    }
}
