@extends('layouts.app')
@section('content')
	<div class="container py-5">
		<div class="card w-100">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Master Barang</a></li>
					<li class="breadcrumb-item active" aria-current="page">Table Index</li>
				</ol>
			</nav>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<!-- tabel -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Kode Barang</th>
									<th>Nama Barang</th>
									<th>Brand</th>
									<th>UOM</th>
									<th>Price</th>
									<th>Stock</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($addindex  as $add)
									<tr>
										<td>{{$add->kode}}</td>
										<td>{{$add->nama}}</td>
										<td>{{$add->brand}}</td>
										<td>{{$add->uom}}</td>
										<td>{{$add->price}}</td>
										<td>{{$add->stock}}</td>																				
										<td>
											<!-- button table -->
											<a href="{{ route('edit.index', $add->id) }}" class="btn btn-outline-warning">Edit Index</a>
											<a href="{{ route('delete.index', $add->id) }}"  class="btn btn-outline-danger">Hapus Index</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
                        <a href="{{ route('create.index')}}" type="button" class="btn btn-outline-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection