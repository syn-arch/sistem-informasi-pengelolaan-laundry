@extends('layouts.app')

@section('content')


<div class="row">
	<div class="col-lg-12">
		<div class="white-box">
			<div class="pull-left">
				<h3 class="box-title">Laporan Transaksi Dari Tanggal {{$dari_tanggal}} Sampai Tanggal {{$sampai_tanggal}}</h3>
			</div>
			<div class="pull-right">
				<a href="/laporan" class="btn btn-info"><i class="fa fa-arrow-left"></i> Kembali</a>
				<a target="_blank" href="/laporan/cetak_riwayat/{{$outlet->id}}/{{$dari_tanggal_raw}}/{{$sampai_tanggal_raw}}" class="btn btn-primary"><i class="fa fa-print"></i> Cetak Laporan</a>
			</div><br><br>
			<hr>
			<div class="box-body">
				<div class="row">
					<div class="col-md-6">
						<table class="table">
							<tr>
								<th>Outlet</th>
								<td>{{$outlet->nama_outlet}}</td>
							</tr>
							<tr>
								<th>Dari Tanggal</th>
								<td>{{$dari_tanggal}}</td>
							</tr>
							<tr>
								<th>Sampai Tanggal</th>
								<td>{{$sampai_tanggal}}</td>
							</tr>
							<tr>
								<th>Total Pendapatan</th>
								<td>{{"Rp. " . number_format($total_pendapatan)}}</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-hover table-striped tables">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Paket</th>
								<th>Total Transaksi</th>
								<th>Pendapatan</th>
								<th>Member</th>
								<th>Jumlah Bayar</th>
								<th><i class="fa fa-gears"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1 ?>
							@foreach($riwayat as $row)
							<tr>
								<td>{{$no++}}</td>
								<td>{{date('d-m-Y', strtotime($row->tgl))}}</td>
								<td>{{$row->kode_invoice}}</td>
								<td>{{date('d-m-Y', strtotime($row->tgl_bayar))}}</td>
								<td>{{$row->member->nama_member}}</td>
								<td>{{"Rp. " . number_format($row->total_bayar)}}</td>
								<td>
									<a href="/transaksi/invoice/{{$row->id}}?link=laporan/riwayat" class="btn btn-info"><i class="fa fa-eye"></i></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('js')
<script>
	$(function(){
		$('.tables').DataTable()
	})
</script>

@endpush