@extends('layouts.app')
@section('content')
	<div class="container py-5">
		<div class="card w-100">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Master Data</a></li>
					<li class="breadcrumb-item active" aria-current="page">Table Satuan</li>
				</ol>
			</nav>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<!-- tabel -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Kode Satuan</th>
									<th>Nama Satuan</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($addsatuan  as $add)
									<tr>
										<td>{{$add->kode}}</td>
										<td>{{$add->nama}}</td>
										<td>
											<!-- button table -->
											<a href="{{ route('edit.satuan', $add->id) }}" class="btn btn-outline-warning">Edit Satuan</a>
											<a href="{{ route('delete.satuan', $add->id) }}"  class="btn btn-outline-danger">Hapus Satuan</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
                        <a href="{{ route('create.satuan')}}" type="button" class="btn btn-outline-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection