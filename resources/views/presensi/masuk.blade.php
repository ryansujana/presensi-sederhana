@extends('adminlte.app')
@section('title','Presensi Masuk')
@section('content')
<div class="card">
	<div class="card-title"></div>
	@include('adminlte/jamjs')

	<style>
		#watch {
			color : rgb(252, 150, 65);
			position: absolute;
			z-index: 1;
			height: 40px;
			width: 700px;
			overflow: show;
			margin: auto;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			font-size: 10vw;
			-webkit-text-stroke: 3px rgb(210, 65, 36);
			text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
			4px 4px 20px rgba(210, 45, 26, 0.4),
			4px 4px 30px rgba(210, 25, 16, 0.4),
			4px 4px 40px rgba(210, 15, 06, 0.4);
		}
	</style>

	<form action="{{ route('simpan-masuk') }}" method="POST">
		@csrf
		<div class="form-group">
			<center>
				<label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke:3px #00ACFE;
				text-shadow: 4px 4px 10px #36D6FE,
				4px 4px 20px #36D6FE,
				4px 4px 40px #36D6FE;">	
			</label>
		</center>
	</div>
	<center>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Klik presensi masuk</button>
		</div>
	</center>
</form>

</div>

@endsection