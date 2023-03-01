@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div>
                <h3>Latihan Multiple Create Data</h3>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('latihan.store.multiple')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Category</label>
                    <input type="text" name="name" id="" value="{{$book->category->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis</label>
                    <input type="text" name="types" id="" value="{{$book->category->types}} class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Buku</label>
                    <input type="text" name="name" id="" value="{{$book->name}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Terbit</label>
                    <input type="text" name="tanggal_terbit" id="" value="{{$book->tanggal_terbit}}"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Pengarang</label>
                    <input type="text" name="nama_pengarang" id="" value="{{$book->nama_pengarang}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">total</label>
                    <input type="text" name="total" id="" value="{{$book->total}}"  class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Simpan data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection