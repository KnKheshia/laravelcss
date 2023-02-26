@extends('layouts.app')
@section('content')
	<div class="container py-5">
		<div class="card w-100">
			<!-- breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Master Data</a></li>
					<li class="breadcrumb-item active" aria-current="page">Table Brand</li>
				</ol>
			</nav>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<!-- tabel -->
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Kode Brand</th>
									<th>Nama Brand</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($addebrand as $add)
									<tr>
										<td>{{$add->kode}}</td>
										<td>{{$add->nama}}</td>
										<td>
											<!-- button table -->
											<a href="{{ route('edit.ebrand', $add->id) }}" class="btn btn-outline-warning">Edit Brand</a>
											<a href="{{ route('delete.ebrand', $add->id) }}"  class="btn btn-outline-danger">Hapus Brand</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
                        <a href="{{ route('create.ebrand')}}" type="button" class="btn btn-outline-primary">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection