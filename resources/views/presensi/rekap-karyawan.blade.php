@extends('adminlte.app')
@section('title','Laporan Karyawan')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<div class="card-body table-responsive p-0">

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


				<div class="form-group">
					<table class="table table-hover text-nowrap">
						<tr>
							<th>pegawai</th>
							<th>tanggal</th>
							<th>masuk</th>
							<th>keluar</th>
							<th>jumlah jam kerja</th>
						</tr>
						@foreach($presensi as $item)
						<tr>
							<td>{{$item->user->name}}</td>
							<td>{{$item->tgl}}</td>
							<td>{{$item->jammasuk}}</td>
							<td>{{$item->jamkeluar}}</td>
							<td>{{$item->jamkerja}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
		
	</div>
</div>
</div>

@endsection