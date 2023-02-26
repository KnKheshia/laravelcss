@extends('layouts.app')
@section('content')
	<div class="container py-5">
		<div class="card w-100">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Master Data</a></li>
					<li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>
				</ol>
			</nav>
            <div class="card-body">
            <form action="{{route('update.ekategori', $editekategori->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Kode Kategori</label>
                            <input type="text" name="kode" class="form-control" value="{{$editekategori->nomor}}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="form-label">Nama Kategori</label>
                            <input type="text" name="nama" class="form-control" value="{{$editekategori->nama}}">
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