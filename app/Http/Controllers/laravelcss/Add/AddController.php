<?php

namespace App\Http\Controllers\laravelcss\Add;

use Redirect;
use App\Add;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    public function index()
    {
        $addbarang = Add::all();
        return view('laravelcss.Add.Add',compact('addbarang'));
    }
    public function create()
    {
        return view('laravelcss.Add.Add-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       Add::create($request->all());
       return redirect()->route('tampilan.add');
    }
    public function edit($id)
    {
        $editadd = Add::findorfail($id);
        return view('laravelcss.Add.Add-edit', compact('editadd'));
    }
    public function update(Request $request,$id)
    {
        $editadd = Add::findorfail($id);
        $editadd->update($request->all());
        return redirect()->route('tampilan.add');
    }
    public function destroy(Request $request,$id)
    {
        $editadd = Add::findOrFail($id);
        $editadd->delete($request->all());
        return redirect()->route('tampilan.add');
    }
}
