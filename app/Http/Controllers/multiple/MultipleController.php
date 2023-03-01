<?php

namespace App\Http\Controllers\multiple;
use App\Category;
use App\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MultipleController extends Controller
{
  public function index()
  {
    $categorys = Category::with('books')->get();
    $books     = Book::with('category')->get();
    return view('latihan.multiple.index', compact('categorys','books'));
  }
  public function create()
  {
    return view('latihan.multiple.create');
  }
  public function store(Request $request)
  {
        $request->validate([
            'name'            => 'required',
            'types'           => 'required',
            'name'            => 'required',
            'tanggal_terbit'  => 'required',
            'nama_pengarang'  => 'required',
            'total'           => 'required',
        ]);

        $category = Category::create([
            'name'  => $request->name,
            'types' => $request->types,
        ]);


        if($category->save()){
            $books = Book::create([
                'category_id'   => $category->id,
                'name'          => $request->name,
                'tanggal_terbit'    => $request->tanggal_terbit,
                'nama_pengarang'    => $request->nama_pengarang,
                'total'             => $request->total,
            ]);
        }

        return redirect()->back();
  }
  public function edit($id)
  {
        $book = Book::with('category')->findOrFail($id);

        return view('latihan.multiple.edit', compact('book'));
  }
}
