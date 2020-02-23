@extends('layouts.app')

@section('content')


<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Cucian Baru</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-people text-info"></i></li>
						<li class="text-right"><span class="counter">23</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Cucian Diproses</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-folder text-purple"></i></li>
						<li class="text-right"><span class="counter">169</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Cucian Selesai</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-folder-alt text-danger"></i></li>
						<li class="text-right"><span class="counter">311</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="white-box">
					<h3 class="box-title">Cucian Diambil</h3>
					<ul class="list-inline two-part">
						<li><i class="ti-wallet text-success"></i></li>
						<li class="text-right"><span class="counter">117</span></li>
					</ul>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-6">
				<div class="white-box text-center bg-purple">
					<h1 class="text-white counter">165</h1>
					<p class="text-white">jumlah member</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="white-box text-center bg-info">
					<h1 class="text-white counter">2065</h1>
					<p class="text-white">total transaksi berhasil</p>
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
								<th>MEMBER</th>
								<th>INVOICE</th>
								<th>TOTAL BAYAR</th>
								<th>STATUS</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td class="txt-oflo">Elite admin</td>
								<td class="txt-oflo">April 18, 2017</td>
								<td><span class="text-success">$24</span></td>
								<td><span class="label label-success label-rouded">SALE</span></td>
							</tr>
							<tr>
								<td>2</td>
								<td class="txt-oflo">Real Homes WP Theme</td>
								<td class="txt-oflo">April 19, 2017</td>
								<td><span class="text-info">$1250</span></td>
								<td><span class="label label-info label-rouded">EXTENDED</span></td>
							</tr>
							<tr>
								<td>3</td>
								<td class="txt-oflo">Medical Pro WP Theme</td>
								<td class="txt-oflo">April 20, 2017</td>
								<td><span class="text-danger">-$24</span></td>
								<td><span class="label label-danger label-rouded">TAX</span></td>
							</tr>
							<tr>
								<td>4</td>
								<td class="txt-oflo">Hosting press html</td>
								<td class="txt-oflo">April 21, 2017</td>
								<td><span class="text-success">$24</span></td>
								<td><span class="label label-warning label-rouded">SALE</span></td>
							</tr>
							<tr>
								<td>5</td>
								<td class="txt-oflo">Helping Hands WP Theme</td>
								<td class="txt-oflo">April 22, 2017</td>
								<td><span class="text-success">$24</span></td>
								<td><span class="label label-success label-rouded">member</span></td>
							</tr>
							<tr>
								<td>6</td>
								<td class="txt-oflo">Digital Agency PSD</td>
								<td class="txt-oflo">April 23, 2017</td>
								<td><span class="text-danger">-$14</span></td>
								<td><span class="label label-success label-rouded">SALE</span></td>
							</tr>
							<tr>
								<td>7</td>
								<td class="txt-oflo">Helping Hands WP Theme</td>
								<td class="txt-oflo">April 22, 2017</td>
								<td><span class="text-success">$64</span></td>
								<td><span class="label label-warning label-rouded">member</span></td>
							</tr>
						</tbody>
					</table> <a href="#">Check all the sales</a> </div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection