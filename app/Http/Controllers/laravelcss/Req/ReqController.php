<?php

namespace App\Http\Controllers\laravelcss\Req;

use Redirect;
use App\Req;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReqController extends Controller
{
    public function index()
    {
        $addreq = Req::all();
        return view('laravelcss.Req.Req',compact('addreq'));
    }
    public function create()
    {
        return view('laravelcss.Req.Req-create');
    }
    public function store(Request $request)
    {
       // dd($request->all());
       Req::create($request->all());
       return redirect()->route('tampilan.req');
    }
    public function edit($id)
    {
        $editreq = Req::findorfail($id);
        return view('laravelcss.Req.Req-edit', compact('editreq'));
    }
    public function update(Request $request,$id)
    {
        $editreq = Req::findorfail($id);
        $editreq->update($request->all());
        return redirect()->route('tampilan.req');
    }
    public function destroy(Request $request,$id)
    {
        $editreq = Req::findOrFail($id);
        $editreq->delete($request->all());
        return redirect()->route('tampilan.req');
    }
}
