@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal" method="post">
						<div class="pull-left">
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">Invoice</label>
								<div class="col-1"></div>
								<div class="col-9">
									<strong>{{$kode_invoice}}</strong>
								</div>
							</div>
							<div class="form-group row">
								<label for="example-text-input" class="col-2 col-form-label">Member</label>
								<div class="col-1"></div>
								<div class="col-9">
									<div class="input-group">
										<input type="text" class="form-control nama_member" readonly placeholder="Cari Member">
										<input type="hidden" name="id_member" class="id_member" value="">
										<div class="input-group-append">
											<a class="btn btn-success" data-toggle="modal" href="#member-modal"><i class="fa fa-search"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pull-right">
							Tanggal : {{date('d-m-Y')}}
							<br>
							<br>
							<br>
							<div class="pull-right">
								<a data-toggle="modal" href="#paket-modal" class="btn btn-primary">
									<i class="fa fa-plus"></i> Tambah Paket
								</a>
							</div>
						</div>
					</div>
				</div>
				<hr style="margin-top: -7px">
				<div class="daftar-transaksi">
					<div class="table-responsive">
						<table class="table table-striped table-transaksi">
							<thead>
								<tr>
									<th>Paket</th>
									<th>Harga</th>
									<th>Qty</th>
									<th>Jumlah Harga</th>
									<th>Ket.</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
				<br>
				<div class="row" style="margin-top: 20px">
					<div class="col-md-12">
						<div class="pull-left">
							<h5>Total Bayar</h5>
							<h1>Rp. <span class="total">{{$total}}</span></h1>
						</div>
						<div class="pull-right">
							<a href="/transaksi/batal" class="btn btn-danger">
								<i class="fa fa-refresh"></i> Batalkan
							</a>
							<button type="button" data-toggle="modal" data-target="#modal-konfirmasi" class="btn btn-success">
								<i class="fa fa-save"></i> Konfirmasi
							</button >
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Konfirmasi -->
<div class="modal fade" id="modal-konfirmasi" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pesanan</h5>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="batas_waktu">Batas Waktu</label>
							<input type="date" class="form-control batas_waktu" name="batas_waktu" id="batas_waktu" placeholder="Batas Waktu" value="{{ old('batas_waktu') }}">
							@error('batas_waktu')
							<small style="color:red">{{$message}}</small>
							@enderror
						</div>
						<div class="form-group">
							<label for="biaya_tambahan">Biaya Tambahan</label>
							<input type="text" class="form-control biaya_tambahan" name="biaya_tambahan" id="biaya_tambahan" placeholder="Biaya Tambahan" value="{{ old('biaya_tambahan') }}">
							@error('biaya_tambahan')
							<small style="color:red">{{$message}}</small>
							@enderror
						</div>
						<div class="form-group">
							<label for="diskon">Diskon (%)</label>
							<input type="text" class="form-control diskon" name="diskon" id="diskon" placeholder="Diskon" value="{{ old('diskon') }}">
							@error('diskon')
							<small style="color:red">{{$message}}</small>
							@enderror
						</div>
						<div class="form-group">
							<label for="pajak">Pajak</label>
							<input type="text" class="form-control pajak" name="pajak" id="pajak" placeholder="Pajak" value="{{ old('pajak') }}">
							@error('pajak')
							<small style="color:red">{{$message}}</small>
							@enderror
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-check">
							<input class="form-check-input bayar_sekarang" type="checkbox" value="1" id="bayar_sekarang" name="bayar_sekarang">
							<label class="form-check-label ml-2" for="bayar_sekarang">
								Bayar Sekarang
							</label>
						</div>
						<br>
						<div class="form-group" id="total-bayar">
							<input type="hidden" name="t_bayar" class="t_bayar" value="{{$total}}">
							<input type="hidden" name="t_setelah_b_tambahan" class="t_setelah_b_tambahan">
							<input type="hidden" name="setelah_diskon" class="setelah_diskon">
							<label for="total_bayar">Total Bayar</label>
							<input type="text" class="form-control total_bayar" name="total_bayar" id="total_bayar" placeholder="Total Bayar" value="{{ $total }}" readonly>
							@error('total_bayar')
							<small style="color:red">{{$message}}</small>
							@enderror
						</div>
						<div class="form-group" id="tunai">
							<label for="tunai">Tunai</label>
							<input type="text" class="form-control tunai" autocomplete="off" name="tunai" id="tunai" placeholder="Tunai" value="{{ old('tunai') }}">
							@error('tunai')
							<small style="color:red">{{$message}}</small>
							@enderror
						</div>
						<div class="form-group" id="kembalian">
							<label for="kembalian">Kembalian</label>
							<input type="text" class="form-control kembalian" name="kembalian" id="kembalian" placeholder="Kembalian" value="{{ old('kembalian') }}" readonly>
							@error('kembalian')
							<small style="color:red">{{$message}}</small>
							@enderror
						</div>	
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<div class="pull-right">
					<div class="form-group">
						<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Konfirmasi</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Modal Tambah Paket -->
<div class="modal fade" id="paket-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLongTitle">Daftar Paket</h5>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<form action="/transaksi/tambah_paket" method="post" class="tambah-paket">
						@csrf
						<div class="form-group">
							<label for="id_paket">Nama Paket</label>
							<select name="id_paket" id="id_paket" class="form-control id_paket">
								<option value="pilih_paket">-- Pilih Paket --</option>
								@foreach($paket as $row)
								<option value="{{$row->id}}">{{$row->nama_paket . " --" . "Rp. " . number_format($row->harga)}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<label for="qty">Qty</label>
							<input type="number" class="form-control qty" name="qty" placeholder="Qty">
							@error('qty')
							<small style="color:red">{{$message}}</small>
							@enderror
						</div>
						<div class="form-group">
							<label for="keterangan">Keterangan</label>
							<textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control keterangan" placeholder="Keterangan"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal Tambah Member -->
<div class="modal fade" id="member-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLongTitle">Daftar Member</h5>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table class="table table-striped tables">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Telepon</th>
								<th>Jk</th>
								<th><i class="fa fa-gear"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							@foreach($member as $row)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$row->nama_member}}</td>
								<td>{{$row->alamat}}</td>
								<td>{{$row->telepon}}</td>
								<td>{{$row->jk}}</td>
								<td>
									<button class="btn btn-success pilih-member" data-id="{{$row->id}}"><i class="fa fa-check"></i></button>
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

		$('#tunai').hide()
		$('#kembalian').hide()
		$('#total-bayar').hide()

		$('.bayar_sekarang').change(function(){
			if (this.checked) {
				$('#tunai').show()
				$('#kembalian').show()
				$('#total-bayar').show()
			}else{
				$('#tunai').hide()
				$('#kembalian').hide()
				$('#total-bayar').hide()
			}
		})

		$('.tables').DataTable()

		$('.table-transaksi').DataTable({
			searching : false,
			paging : false,
			processing : true,
			serverSide : true,
			ajax : '/transaksi/getdetailTransaksi',
			columns : [
			{ data : 'nama_paket'},
			{ 
				data : 'harga',
				render: $.fn.dataTable.render.number( ',', '.', 2, 'Rp. ' )
			},
			{ data : 'qty'},
			{ 
				data : 'jumlah_harga',
				render: $.fn.dataTable.render.number(',', '.', 2, 'Rp. ')
			},
			{ data : 'keterangan'}
			]
		})

		$('.tunai').keyup(function(){
			var tunai = $(this).val()
			var total = $('.total_bayar').val()
			var kembalian = tunai - total;
			$('.kembalian').val(kembalian)
		})

		$('.biaya_tambahan').keyup(function(){
			var biaya_tambahan = $(this).val()
			var total = $('.t_bayar').val()
			var total_akhir = parseInt(biaya_tambahan) + parseInt(total)

			$('.total_bayar').val(total_akhir)
			$('.t_setelah_b_tambahan').val(total_akhir)
		})

		$('.diskon').keyup(function(){
			var diskon_persen = $(this).val()
			
			var harga = $('.t_setelah_b_tambahan').val()

			var diskon = (parseInt(diskon_persen)/100) * parseInt(harga)
			var setelah_diskon = parseInt(harga) - parseInt(diskon)

			$('.total_bayar').val(setelah_diskon)
			$('.setelah_diskon').val(setelah_diskon)
		})

		$('.pajak').keyup(function(){
			var pajak = $(this).val()
			var total = $('.setelah_diskon').val()
			var total_lagi = parseInt(total) - parseInt(pajak);

			$('.total_bayar').val(total_lagi)
		})

		$('.pilih-member').click(function(){
			var id = $(this).data('id')
			$.ajax({
				url : '/member/get_member/' + id,
				data : {id : id},
				success: function(data){
					var member =  JSON.parse(data)
					$('.id_member').val(member.id)
					$('.nama_member').val(member.nama_member)
					$('#member-modal').modal('hide')
				}
			})
		})

		$('.tambah-paket').submit(function(e){
			e.preventDefault()
			$.ajax({
				headers : {
					'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
				},
				method : 'POST',
				url :'/transaksi/tambah_paket',
				data : $(this).serialize(),
				success : function(response){
					$('#paket-modal').modal('hide')
					$('.table-transaksi').DataTable().ajax.reload()

					$.ajax({
						url : '/transaksi/hitung_total',
						success : function(data){
							$('.total').text(data)
							$('.total_bayar').val(data)
							$('.t_bayar').val(data)

							$('.id_paket').val('pilih_paket')
							$('.qty').val('')
							$('.keterangan').text('')
						}
					})

				}
			})
		})




	})
</script>
@endpush