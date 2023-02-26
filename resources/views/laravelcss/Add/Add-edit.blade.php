@extends('layouts.app')
@section('content')
	<div class="container py-5">
		<div class="card w-100">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Master Barang</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit Add Barang Baru</li>
				</ol>
			</nav>
            <div class="card-body">
            <form action="{{route('update.add', $editadd->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Nomor Referensi</label>
                            <input type="text" name="nomor" class="form-control" value="{{$editadd->nomor}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Nama Barang</label>
                            <input type="text" name="nama" class="form-control" value="{{$editadd->nama}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Kategori</label>
                            <input type="text" name="kategori" class="form-control" value="{{$editadd->kategori}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Brand</label>
                            <input type="text" name="brand" class="form-control" value="{{$editadd->brand}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">UOM</label>
                            <input type="text" name="uom" class="form-control" value="{{$editadd->uom}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{$editadd->harga}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="form-label">Image</label><br>
                        <input class="form-control" name="image" type="text" value="{{$editadd->image}}">
                    </div>
                    <!-- form -->
                    <div class="col">
                        <label for="form-label">Status</label>
                        <input type="text" name="status" class="form-control" value="{{$editadd->status}}">
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