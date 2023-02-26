@extends('layouts.app')
@section('content')
	<div class="container py-5">
		<div class="card w-100">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Transaksi</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit Barang Keluar</li>
				</ol>
			</nav>
            <div class="card-body">
            <form action="{{route('update.bkeluar', $editbkeluar->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Referensi</label>
                            <input type="text" name="referensi" class="form-control" value="{{$editbkeluar->referensi}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Supplier</label>
                            <input type="text" name="supplier" class="form-control" value="{{$editbkeluar->supplier}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Status</label>
                            <input type="text" name="status" class="form-control" value="{{$editbkeluar->status}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" value="{{$editbkeluar->tanggal}}">
                        </div>
                    </div>
                </div>
                <div>
                    <br><button type="submit"class="btn btn-info">Simpan</button>
                </div>
            </form>
        </div>
		</div>
	</div>
@endsection.