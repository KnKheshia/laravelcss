@extends('layouts.app')
@section('content')
	<div class="container py-5">
		<div class="card w-100">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Master Barang</a></li>
					<li class="breadcrumb-item active" aria-current="page">Table Request Stock Barang</li>
				</ol>
			</nav>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<!-- tabel -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Nomor Referensi</th>
									<th>Nama Barang</th>
									<th>Kategori</th>
									<th>Brand</th>
									<th>UOM</th>
									<th>Harga</th>
									<th>Image</th>
                                    <th>Status</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($addreq as $add)
									<tr>
										<td>{{$add->nomor}}</td>
										<td>{{$add->nama}}</td>
										<td>{{$add->kategori}}</td>
										<td>{{$add->brand}}</td>
										<td>{{$add->uom}}</td>
										<td>{{$add->harga}}</td>
										<td>{{$add->image}}</td>
										<td>{{$add->status}}</td>
										<td>
											<!-- button table -->
											<a href="{{ route('edit.req', $add->id) }}" class="btn btn-outline-warning">Edit Request</a>
											<a href="{{ route('delete.req', $add->id) }}"  class="btn btn-outline-danger">Hapus</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
                        <a href="{{ route('create.req')}}" type="button" class="btn btn-outline-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection