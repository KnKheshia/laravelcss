@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="mb-3">
            <a href="{{route('latihan.create.multiple')}}" class="btn btn-info">Tambah Data</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <div>
                                <h3>Table Category</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>types</th>
                                    <th>nama buku</th>
                                    <th>tanggal terbit</th>
                                    <th>nama pengarang</th>
                                    <th>total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorys as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->types}}</td>
                                    <td>{{$category->books->first()->name}}</td>
                                    <td>{{$category->books->first()->tanggal_terbit}}</td>
                                    <td>{{$category->books->first()->nama_pengarang}}</td>
                                    <td>{{$category->books->first()->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <div>
                                <h3>Table Books</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>nama</th>
                                    <th>jenis</th>
                                    <th>nama buku</th>
                                    <th>tanggal terbit</th>
                                    <th>nama pengarang</th>
                                    <th>total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                <tr>
                                    <td>
                                        <a href="{{route('latihan.edit.multiple',$book->id)}}" class="btn btn-outline-waring btn-sm">
                                            {{$book->category->name}}
                                        </a>
                                    </td>
                                    <td>{{$book->category->types}}</td>
                                    <td>{{$book->name}}</td>
                                    <td>{{$book->tanggal_terbit}}</td>
                                    <td>{{$book->nama_pengarang}}</td>
                                    <td>{{$book->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection