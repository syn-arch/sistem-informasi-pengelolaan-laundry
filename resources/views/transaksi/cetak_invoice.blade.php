<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cetak Invoice</title>
	<style>
		* {
			font-family: arial;
			font-size: 12px;
		}

		.container {
			width: 100%;
		}

		.my-table{
			margin: auto;
			width: 10%;
		}

		td {
			font-size: 11px;
		}

	</style>
</head>
<body>
	<div class="container">
		<table border="1" cellpadding="10" cellspacing="0" class="my-table">
			<tr>
				<td colspan="6">
					<center>
						<h2>TOKO ABADI JAYA 1</h2>
						<p>Jl.Batulawang No.82 Kec.Ciwidey Kab.Bandung</p>
					</center>
				</td>
			</tr>
			<tr>
				<th colspan="2">Invoice</th>
				<td colspan="4">{{$data->kode_invoice}}</td>
			</tr>
			<tr>
				<th colspan="2">Tanggal</th>
				<td colspan="4">{{date('d/m/Y', strtotime($data->tgl))}}</td>
			</tr>
			<tr>
				<th colspan="2">Nama Member</th>
				<td colspan="4">{{$data->member->nama_member}}</td>
			</tr>
			<tr>
				<th colspan="2">Status</th>
				<td colspan="4">{{$data->dibayar}}</td>
			</tr>
			<tr>
				<th>No</th>
				<th>Nama Paket</th>
				<th>Harga</th>
				<th>Qty</th>
				<th>Jumlah Harga</th>
				<th>Ket</th>
			</tr>
			<tbody>
				<?php $no=1; foreach ($detail as $row): ?>
				<tr>
					<td>{{$no++}}</td>
					<td>{{$row->paket->nama_paket}}</td>
					<td>{{"Rp. " . number_format($row->paket->harga)}}</td>
					<td>{{$row->qty}}</td>
					<td>{{"Rp. " . number_format($row->jumlah_harga)}}</td>
					<td>{{$row->keterangan ? $row->keterangan : '-' }}</td>
				</tr>
				<?php endforeach ?>
			<tr>
				<td colspan="4" rowspan="{{$data->dibayar == 'Dibayar' ? '6' : '4'}}">
					<strong>Catatan :</strong>
					<p>
						Bawa struk ini ketika hendak mengambil cucian, terima kasih telah mempercayakan cucian anda kepada kami.
					</p>
				</td>
				<th>Pajak</th>
				<td>{{"Rp. " . number_format($data->pajak) }}</td>
			</tr>
			<tr>
				<th>Diskon(%)</th>
				<td>{{$data->diskon}}</td>
			</tr>
			<tr>
				<th>Biaya Tambahan</th>
				<td>{{"Rp. " . number_format($data->biaya_tambahan)}}</td>
			</tr>
			<tr>
				<th>Total Bayar</th>
				<td>{{"Rp. " . number_format($data->total_bayar)}}</td>
			</tr>
			@if($data->dibayar == 'Dibayar')
			<tr>
				<th>Tunai</th>
				<td>{{"Rp. " . number_format($data->tunai)}}</td>
			</tr>
			<tr>
				<th>Kembalian</th>
				<td>{{"Rp. " . number_format($data->tunai - $data->total_bayar)}}</td>
			</tr>
			@endif
		</tbody>
	</div>
</table>