@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div class="pull-left">
				<h3 class="box-title">Data User</h3>
			</div>
			<div class="pull-right">
				<button type="button" data-toggle="modal" data-target="#user-modal" class="btn btn-primary tambah-user"><i class="fa fa-user"></i> Tambah User</button>
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
								<th>Email</th>
								<th>Alamat</th>
								<th>Telepon</th>
								<th>Level</th>
								<th><i class="fa fa-gear"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; ?>
							@foreach($user as $row)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$row->name}}</td>
								<td>{{$row->email}}</td>
								<td>{{$row->alamat}}</td>
								<td>{{$row->telepon}}</td>
								<td>{{$row->level}}</td>
								<td>
									<a href="#user-modal" data-toggle="modal" data-id="{{$row->id}}" class="btn btn-warning ubah-user"><i class="fa fa-edit"></i></a>
									<a href="/user/destroy/{{$row->id}}" class="btn btn-danger hapus-user"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="user-modal" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLongTitle">Data User</h5>
			</div>
			<div class="modal-body">
				<form action="/user/store" method="post" class="form-user">
					@csrf
					<div class="form-group">
						<label for="name">Nama User</label>
						<input type="text" class="form-control name" name="name" id="name" placeholder="Nama User" value="{{ old('name') }}">
						@error('name')
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
						<label for="email">E-mail</label>
						<input type="email" class="form-control email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">
						@error('email')
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
						<label for="level">Level</label>
						<select name="level" id="level" class="form-control level">
							<option value="pilih_level">-- Pilih Level --</option>
							<option value="Admin">Admin</option>
							<option value="Kasir">Kasir</option>
							<option value="Owner">Owner</option>
						</select>
						@error('level')
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

		$('.hapus-user').click(function(e){
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

		$('.tambah-user').click(function(){
			$('.name').val('')
			$('.alamat').val('')
			$('.telepon').val('')
			$('.email').val('')
			$('.level').val('pilih_level')
			$('.id_outlet').val('pilih_outlet')
			$('.form-user').attr('action','/user/store')
		})

		$('.ubah-user').click(function(){
			var id = $(this).data('id')
			$.ajax({
				url : '/user/get_user/' + id,
				data : {id : id},
				success: function(data){
					user =  JSON.parse(data)
					$('.name').val(user.name)
					$('.alamat').val(user.alamat)
					$('.telepon').val(user.telepon)
					$('.email').val(user.email)
					$('.level').val(user.level)
					$('.id_outlet').val(user.id_outlet)
					$('.form-user').attr('action','/user/update/'+id)
				}
			})
		})

	})
	
</script>

@endpush