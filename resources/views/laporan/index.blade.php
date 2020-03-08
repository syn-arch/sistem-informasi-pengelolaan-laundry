@extends('layouts.app')

@section('content')


<div class="row">
	<div class="col-lg-12">
		<div class="white-box">
			<h3 class="box-title">Laporan Transaksi Per Periode</h3>
			<hr>
			<div class="box-body">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<form action="/laporan/get_laporan">
							<div class="form-group">
								<label for="id_outlet">Outlet</label>
								<select name="id_outlet" id="id_outlet" class="form-control">
									@foreach($outlet as $row)
									<option value="{{$row->id}}">{{$row->nama_outlet}}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="dari_tanggal">Dari Tanggal</label>
								<input type="date" class="form-control" name="dari_tanggal">
							</div>
							<div class="form-group">
								<label for="sampai_tanggal">Sampai Tanggal</label>
								<input type="date" class="form-control" name="sampai_tanggal">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-info btn-block">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection