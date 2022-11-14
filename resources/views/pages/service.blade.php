@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-8">

		<div class="card">
			<div class="card-body">

				<div class="form-group">
					<label for="nopol">Nomor Polisi</label>
					<select class="form-control">
						<option>Pilih Kendaraan</option>
						@foreach ($cars as $car)
						<option>{{ $car['nopol'] }}</option>
						@endforeach
					</select>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="km">Kilometer Service</label>
							<div class="input-group mb-3">
								<input type="text" class="form-control" placeholder="999999">
								<div class="input-group-append">
									<span class="input-group-text" id="basic-addon2">Kilometer</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="date">Tanggal Service</label>
							<input type="date" class="form-control" placeholder="12/31/2022">
						</div>
					</div>
				</div>


				<div class="form-group">
					<label for="info">Informasi Service</label>
					<textarea class="form-control" rows="10" placeholder="Masukan Infomasi Service Disini"></textarea>
				</div>

			</div>
			<div class="card-footer">
				<div class="row">
					<div class="col">
						<button class="mb-2 btn btn-block btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</button>
					</div>
					<div class="col">
						<button class="mb-2 btn btn-block btn-primary"><i class="fas fa-save"></i> Simpan Data</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="col-lg-4">
		<div class="info-box">
			<span class="info-box-icon bg-info"><i class="fas fa-car-alt"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Total Kendaraan</span>
				<span class="info-box-number">{{ rand(0,100) }}</span>
			</div>
		</div>
		<div class="info-box">
			<span class="info-box-icon bg-success"><i class="fas fa-check"></i></span>
			<div class="info-box-content">
				<span class="info-box-text">Kendaraan Siap Pakai</span>
				<span class="info-box-number">{{ rand(0,20) }}</span>
			</div>
		</div>
	</div>
</div>

@endsection