@extends('layouts.app')
@section('content')
	<div class="container py-5">
		<div class="card w-100">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Transaksi</a></li>
					<li class="breadcrumb-item active" aria-current="page">Table Barang Masuk</li>
				</ol>
			</nav>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<!-- tabel -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Referensi</th>
									<th>Supplier</th>
									<th>Status</th>
									<th>Tanggal</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($addbmasuk as $add)
									<tr>
										<td>{{$add->referensi}}</td>
										<td>{{$add->supplier}}</td>
										<td>{{$add->status}}</td>
										<td>{{$add->tanggal}}</td>
										<td>
											<!-- button table -->
											<a href="{{ route('edit.bmasuk', $add->id) }}" class="btn btn-outline-warning">Edit Barang Masuk</a>
											<a href="{{ route('delete.bmasuk', $add->id) }}"  class="btn btn-outline-danger">Hapus Barang Masuk</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
                        <a href="{{ route('create.bmasuk')}}" type="button" class="btn btn-outline-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection