@extends('layouts.app')

@section('content')

<div class="row">

	<div class="col-lg-4">
		<div class="info-box">
			<span class="info-box-icon bg-info"><i class="fas fa-car-alt"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Total Kendaraan</span>
				<span class="info-box-number">{{ rand(0,100) }}</span>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="info-box">
			<span class="info-box-icon bg-success"><i class="fas fa-check"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Kendaraan Siap Pakai</span>
				<span class="info-box-number">{{ rand(0,20) }}</span>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="info-box">
			<span class="info-box-icon bg-warning"><i class="fas fa-exclamation-triangle"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Kendaraan Dalam Perawatan</span>
				<span class="info-box-number">{{ rand(0,20) }}</span>
			</div>
		</div>
	</div>

</div>

<div class="row">
	<div class="col-lg-5">
		<div class="card">
			<div class="card-header bg-primary">
				<h3 class="card-title">Data Perawatan Mobil</h3>
			</div>

			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Nopol Kendaraan</th>
							<th>Service Terakhir</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($cars as $index => $car)
						<tr>
							<td>{{ ++$index }}</td>
							<td>
								<a href="{{ route('cars') }}" class="btn btn-outline-info">
									{{ $car['nopol'] }}
								</a>
							</td>
							<td>{{ $car['last_service'] }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>

	<div class="col-lg-7">
		<div class="card">
			<div class="card-header bg-primary">
				<h3 class="card-title">Data Perawatan Mobil</h3>
			</div>

			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Kontak</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $index => $user)
						<tr>
							<td>{{ ++$index }}</td>
							<td>{{ $user['name'] }}</td>
							<td>{{ $user['address'] }}</td>
							<td>{{ $user['phone'] }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>

@endsection