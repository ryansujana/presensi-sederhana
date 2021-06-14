@extends('adminlte.app')
@section('title','Laporan Karyawan')
@section('content')

<div class="card">
	<div class="card-head">
		<div class="card-body">

			<div class="row">
				<div class="col-md-6">

					<div class="form-group">
						<label for="label">Tanggal Awal</label>
						<input type="date" name="tglawal" id="tglawal" class="form-control" />
					</div>

					<div class="form-group">
						<label for="label">Tanggal Akhir</label>
						<input type="date" name="tglakhir" id="tglakhir" class="form-control" />
					</div>

					<div class="form-group">
						<a href="" onclick="this.href='/filter-data/'+ document.getElementById('tglawal').value + 
						'/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
						Lihat <i class="fas fa-search"></i>
					</a>
				</div>
			</div>
		</div>

	</div>
</div>
</div>

@endsection