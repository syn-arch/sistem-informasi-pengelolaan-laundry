@extends('layouts.app')

@section('content')


<div class="row">
	<div class="col-lg-6">
		<div class="row">
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="white-box">
					<h3 class="box-title">NEW CLIENTS</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-people text-info"></i></li>
						<li class="text-right"><span class="counter">23</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="white-box">
					<h3 class="box-title">NEW Projects</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-folder text-purple"></i></li>
						<li class="text-right"><span class="counter">169</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="white-box">
					<h3 class="box-title">Open Projects</h3>
					<ul class="list-inline two-part">
						<li><i class="icon-folder-alt text-danger"></i></li>
						<li class="text-right"><span class="counter">311</span></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 col-sm-6 col-xs-12">
				<div class="white-box">
					<h3 class="box-title">NEW Invoices</h3>
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
					<p class="text-white">counters</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="white-box text-center bg-info">
					<h1 class="text-white counter">2065</h1>
					<p class="text-white">counters</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="white-box">
			<h3 class="box-title">Recent sales
			</h3>
			<div class="row sales-report">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>NAME</th>
								<th>STATUS</th>
								<th>DATE</th>
								<th>PRICE</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td class="txt-oflo">Elite admin</td>
								<td><span class="label label-success label-rouded">SALE</span> </td>
								<td class="txt-oflo">April 18, 2017</td>
								<td><span class="text-success">$24</span></td>
							</tr>
							<tr>
								<td>2</td>
								<td class="txt-oflo">Real Homes WP Theme</td>
								<td><span class="label label-info label-rouded">EXTENDED</span></td>
								<td class="txt-oflo">April 19, 2017</td>
								<td><span class="text-info">$1250</span></td>
							</tr>
							<tr>
								<td>3</td>
								<td class="txt-oflo">Medical Pro WP Theme</td>
								<td><span class="label label-danger label-rouded">TAX</span></td>
								<td class="txt-oflo">April 20, 2017</td>
								<td><span class="text-danger">-$24</span></td>
							</tr>
							<tr>
								<td>4</td>
								<td class="txt-oflo">Hosting press html</td>
								<td><span class="label label-warning label-rouded">SALE</span></td>
								<td class="txt-oflo">April 21, 2017</td>
								<td><span class="text-success">$24</span></td>
							</tr>
							<tr>
								<td>5</td>
								<td class="txt-oflo">Helping Hands WP Theme</td>
								<td><span class="label label-success label-rouded">member</span></td>
								<td class="txt-oflo">April 22, 2017</td>
								<td><span class="text-success">$24</span></td>
							</tr>
							<tr>
								<td>6</td>
								<td class="txt-oflo">Digital Agency PSD</td>
								<td><span class="label label-success label-rouded">SALE</span> </td>
								<td class="txt-oflo">April 23, 2017</td>
								<td><span class="text-danger">-$14</span></td>
							</tr>
							<tr>
								<td>7</td>
								<td class="txt-oflo">Helping Hands WP Theme</td>
								<td><span class="label label-warning label-rouded">member</span></td>
								<td class="txt-oflo">April 22, 2017</td>
								<td><span class="text-success">$64</span></td>
							</tr>
						</tbody>
					</table> <a href="#">Check all the sales</a> </div>
				</div>
			</div>
		</div>
	</div>
</div>

	@endsection