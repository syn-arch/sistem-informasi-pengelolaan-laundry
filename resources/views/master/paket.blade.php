@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div class="pull-left">
				<h3 class="box-title">Data paket</h3>
			</div>
			<div class="pull-right">
				<button type="button" data-toggle="modal" data-target="#paket-modal" class="btn btn-primary tambah-paket"><i class="fa fa-plus"></i> Tambah paket</button>
			</div>
			<br><br><br>
			<div class="box-body">
				@if($msg = Session::get('pesan'))
				<div class="alert alert-success alert-dismissible fade show">
					<button class="close" data-dismiss="alert">
						&times;
					</button>
					<strong>Berhasil</strong>
					<p>{{$msg}}</p>
				</div>
				@endif
				<div class="table-responsive">
					<table class="table table-striped tables">
						<thead>
							<tr>
								<th>No</th>
								<th>Outlet</th>
								<th>Nama</th>
								<th>Jenis</th>
								<th>Harga</th>
								<th><i class="fa fa-gear"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							@foreach($paket as $row)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$row->id_outlet}}</td>
								<td>{{$row->nama_paket}}</td>
								<td>{{$row->jenis}}</td>
								<td>{{"Rp. " . number_format($row->harga)}}</td>
								<td>
									<a href="#paket-modal" data-toggle="modal" data-id="{{$row->id}}" class="btn btn-warning ubah-paket"><i class="fa fa-edit"></i></a>
									<a href="/paket/destroy/{{$row->id}}" class="btn btn-danger hapus-paket"><i class="fa fa-trash"></i></a>
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

<!-- Modal -->
<div class="modal fade" id="paket-modal" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLongTitle">Data paket</h5>
			</div>
			<div class="modal-body">
				<form action="/paket/store" method="post" class="form-paket">
					@csrf
					<div class="form-group">
						<label for="id_outlet">Outlet</label>
						<select name="id_outlet" id="id_outlet" class="form-control id_outlet">
							<option value="pilih_outlet">-- Pilih Outlet --</option>
							@foreach($outlet as $row)
							<option value="{{$row->id}}">{{$row->nama_outlet}}</option>
							@endforeach
						</select>
						@error('id_outlet')
						<small style="color:red">{{$message}}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="jenis">Jenis</label>
						<select name="jenis" id="jenis" class="form-control jenis">
							<option value="pilih_jenis">-- Pilih Jenis --</option>
							<option value="Kiloan">Kiloan</option>
							<option value="Selimut">Selimut</option>
							<option value="Bed Cover">Bed Cover</option>
							<option value="Kaos">Kaos</option>
						</select>
						@error('jenis')
						<small style="color:red">{{$message}}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="nama_paket">Nama paket</label>
						<input type="text" class="form-control nama_paket" name="nama_paket" id="nama_paket" placeholder="Nama paket" value="{{ old('nama_paket') }}">
						@error('nama_paket')
						<small style="color:red">{{$message}}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" class="form-control harga" name="harga" id="harga" placeholder="Harga" value="{{ old('harga') }}">
						@error('harga')
						<small style="color:red">{{$message}}</small>
						@enderror
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-info">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection

@push('js')

<script>

	$(function(){

		$('.tables').DataTable()

		$('.hapus-paket').click(function(e){
			e.preventDefault();

			var link = $(this).attr('href')

			swal({
				title: "Apakah anda yakin?",
				text: "Data yang dihapus tidak dapat dikembalikan",
				icon: "warning",
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					document.location.href = link
				} else {
					swal("Hapus dibatalkan");
				}
			});

		})

		$('.tambah-paket').click(function(){
			$('.nama_paket').val('')
			$('.harga').val('')
			$('.jenis').val('pilih_jenis')
			$('.id_outlet').val('pilih_outlet')
			$('.form-paket').attr('action','/paket/store')
		})

		$('.ubah-paket').click(function(){
			var id = $(this).data('id')
			$.ajax({
				url : '/paket/get_paket/' + id,
				data : {id : id},
				success: function(data){
					paket =  JSON.parse(data)
					$('.nama_paket').val(paket.nama_paket)
					$('.harga').val(paket.harga)
					$('.jenis').val(paket.jenis)
					$('.id_paket').val(paket.id_paket)
					$('.id_outlet').val(paket.id_outlet)
					$('.form-paket').attr('action','/paket/update/'+id)
				}
			})
		})

	})
	
</script>

@endpush