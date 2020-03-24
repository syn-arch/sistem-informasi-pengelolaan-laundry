@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Hari Ini</h3>
					<h2>{{"Rp. " . number_format($hari_ini)}}</h2>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Minggu Ini</h3>
					<h2>{{"Rp. " . number_format($minggu_ini)}}</h2>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Bulan Ini</h3>
					<h2>{{"Rp. " . number_format($bulan_ini)}}</h2>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Tahun Ini</h3>
					<h2>{{"Rp. " . number_format($tahun_ini)}}</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="white-box">
			<div class="box-header">
				<div class="pull-left">
					<h3 class="box-title">Laporan Transaksi</h3>
				</div>
				<div class="pull-right">
					<a href="/laporan/cetak_laporan" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Cetak Laporan</a>
				</div>
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Paket</th>
								<th>Harga</th>
								<th>Total Transaksi</th>
								<th>Total Pembelian Paket</th>
								<th>Pendapatan</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($paket as $row): ?>
							<tr>
								<td>{{$no++}}</td>
								<td>{{$row->nama_paket}}</td>
								<td>{{'Rp. ' . number_format($row->harga)}}</td>
								<td>
									{{count(App\DetailTransaksi::where('id_paket', $row->id)->get())}}
								</td>
								<td>
									{{App\DetailTransaksi::where('id_paket', $row->id)->sum('qty')}}
								</td>
								<td>
									{{"Rp. " . number_format(App\DetailTransaksi::where('id_paket', $row->id)->sum('jumlah_harga'))}}
								</td>
							</tr>
						<?php endforeach ?>
						<tr>
							<td colspan="4"></td>
							<th>Total Pendapatan</th>
							<th>{{ "Rp. " . number_format(App\Transaksi::sum('total_bayar')) }}</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection