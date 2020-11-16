@extends('layouts.admin')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Data Produk
					</div>
					<div class="card-body">
						<form action="{{url('produk')}}" method="post"></form>
							@csrf
						<div class="form-group">
							<label for="" class="control-label">Nama</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class='row no-gutters'>
							<div class="col-md-6">
								<div class="form-group">
									<label for="" class="control-label">Harga</label>
									<input type="text" class="form-control" name="harga">
								</div>
							</div>
						</div>
					</div>
						<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
						
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection