@extends('layouts.app')

@section('content')


<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Cucian Baru</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-folder text-info"></i></li>
						<li class="text-right"><span class="counter">{{$baru}}</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Cucian Diproses</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-folder text-purple"></i></li>
						<li class="text-right"><span class="counter">{{$diproses}}</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Cucian Selesai</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-folder-alt text-danger"></i></li>
						<li class="text-right"><span class="counter">{{$selesai}}</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Cucian Diambil</h3>
					<ul class="list-inline two-part">
						<li><i class="ti-wallet text-success"></i></li>
						<li class="text-right"><span class="counter">{{$diambil}}</span></li>
					</ul>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-6">
				<div class="white-box text-center bg-purple">
					<h1 class="text-white counter">{{$member}}</h1>
					<p class="text-white">JUMLAH MEMBER</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="white-box text-center bg-info">
					<h1 class="text-white counter">{{$transaksi}}</h1>
					<p class="text-white">TRANSAKSI BERHASIL</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<h3 class="box-title">Transaksi Terakhir
			</h3>
			<div class="row sales-report">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>INVOICE</th>
								<th>TANGGAL</th>
								<th>MEMBER</th>
								<th>TOTAL BAYAR</th>
								<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach ($transaksi_terakhir as $trs): ?>
							<tr>
								<td>{{$no++}}</td>
								<td class="txt-oflo">{{$trs->kode_invoice}}</td>
								<td class="txt-oflo">{{date('d-m-Y', strtotime($trs->tgl))}}</td>
								<td class="txt-oflo">{{$trs->member->nama_member}}</td>
								<td><span class="label label-{{$trs->dibayar == 'Dibayar' ? 'success' : 'danger' }}">{{$trs->dibayar}}</span></td>
								<td><span class="label label-<?php if($trs->status == "Baru"){
                                            echo 'success';
                                       }elseif($trs->status == "Proses"){
                                            echo 'warning';
                                        }elseif($trs->status == "Selesai"){
                                            echo 'info';
                                        }elseif($trs->status == "Diambil"){
                                            echo 'primary';
                                        }?> label-rouded">{{$trs->status}}</span></td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table> <a href="/transaksi">Lihat semua data transaksi</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection