<?php

namespace App\Http\Controllers\laravelcss\Index;

use Redirect;
use App\Index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $addindex = Index::all();
        return view('laravelcss.Index.Index',compact('addindex'));
    }
    public function create()
    {
        return view('laravelcss.Index.Index-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       Index::create($request->all());
       return redirect()->route('tampilan.index');
    }
    public function edit($id)
    {
        $editindex = Index::findorfail($id);
        return view('laravelcss.Index.Index-edit', compact('editindex'));
    }
    public function update(Request $request,$id)
    {
        $editindex = Index::findorfail($id);
        $editindex->update($request->all());
        return redirect()->route('tampilan.index');
    }
    public function destroy(Request $request,$id)
    {
        $editindex = Index::findOrFail($id);
        $editindex->delete($request->all());
        return redirect()->route('tampilan.index');
    }
}
