@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div class="pull-left">
				<h3 class="box-title">Data outlet</h3>
			</div>
			<div class="pull-right">
				<button type="button" data-toggle="modal" data-target="#outlet-modal" class="btn btn-primary tambah-outlet"><i class="fa fa-plus"></i> Tambah outlet</button>
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
								<th>Nama</th>
								<th>Alamat</th>
								<th>Telepon</th>
								<th><i class="fa fa-gear"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							@foreach($outlet as $row)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$row->nama_outlet}}</td>
								<td>{{$row->alamat}}</td>
								<td>{{$row->telepon}}</td>
								<td>
									<a href="#outlet-modal" data-toggle="modal" data-id="{{$row->id}}" class="btn btn-warning ubah-outlet"><i class="fa fa-edit"></i></a>
									<a href="/outlet/destroy/{{$row->id}}" class="btn btn-danger hapus-outlet"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="outlet-modal" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLongTitle">Data outlet</h5>
			</div>
			<div class="modal-body">
				<form action="/outlet/store" method="post" class="form-outlet">
					@csrf
					<div class="form-group">
						<label for="nama_outlet">Nama outlet</label>
						<input type="text" class="form-control nama_outlet" name="nama_outlet" id="nama_outlet" placeholder="Nama outlet" value="{{ old('nama_outlet') }}">
						@error('nama_outlet')
						<small style="color:red">{{$message}}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea name="alamat" id="alamat" cols="20" rows="10" class="form-control alamat" placeholder="Alamat"></textarea>
						@error('alamat')
						<small style="color:red">{{$message}}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="telepon">Telepon</label>
						<input type="text" class="form-control telepon" name="telepon" id="telepon" placeholder="Telepon" value="{{ old('telepon') }}">
						@error('telepon')
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

		$('.hapus-outlet').click(function(e){
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

		$('.tambah-outlet').click(function(){
			$('.nama_outlet').val('')
			$('.alamat').val('')
			$('.telepon').val('')
			$('.email').val('')
			$('.level').val('pilih_level')
			$('.id_outlet').val('pilih_outlet')
			$('.form-outlet').attr('action','/outlet/store')
		})

		$('.ubah-outlet').click(function(){
			var id = $(this).data('id')
			$.ajax({
				url : '/outlet/get_outlet/' + id,
				data : {id : id},
				success: function(data){
					outlet =  JSON.parse(data)
					$('.nama_outlet').val(outlet.nama_outlet)
					$('.alamat').val(outlet.alamat)
					$('.telepon').val(outlet.telepon)
					$('.email').val(outlet.email)
					$('.level').val(outlet.level)
					$('.id_outlet').val(outlet.id_outlet)
					$('.form-outlet').attr('action','/outlet/update/'+id)
				}
			})
		})

	})
	
</script>

@endpush