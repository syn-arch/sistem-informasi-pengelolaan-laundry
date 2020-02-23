@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div class="pull-left">
				<h3 class="box-title">Data member</h3>
			</div>
			<div class="pull-right">
				<button type="button" data-toggle="modal" data-target="#member-modal" class="btn btn-primary tambah-member"><i class="fa fa-plus"></i> Tambah member</button>
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
								<th>Jk</th>
								<th>Tanggal Daftar</th>
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
								<td>{{$row->tgl_daftar}}</td>
								<td>
									<a href="#member-modal" data-toggle="modal" data-id="{{$row->id}}" class="btn btn-warning ubah-member"><i class="fa fa-edit"></i></a>
									<a href="/member/destroy/{{$row->id}}" class="btn btn-danger hapus-member"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="member-modal" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h5 class="modal-title" id="exampleModalLongTitle">Data member</h5>
			</div>
			<div class="modal-body">
				<form action="/member/store" method="post" class="form-member">
					@csrf
					<div class="form-group">
						<label for="nama_member">Nama member</label>
						<input type="text" class="form-control nama_member" name="nama_member" id="nama_member" placeholder="Nama member" value="{{ old('nama_member') }}">
						@error('nama_member')
						<small style="color:red">{{$message}}</small>
						@enderror
					</div>
					<div class="form-group">
						<label for="jk">Jenis Kelamin</label>
						<select name="jk" id="jk" class="form-control jk">
							<option value="pilih_jenis">-- Pilih Jenis Kelamin --</option>
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						</select>
						@error('jk')
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

		$('.hapus-member').click(function(e){
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

		$('.tambah-member').click(function(){
			$('.nama_member').val('')
			$('.alamat').val('')
			$('.telepon').val('')
			$('.email').val('')
			$('.jk').val('pilih_jenis')
			$('.form-member').attr('action','/member/store')
		})

		$('.ubah-member').click(function(){
			var id = $(this).data('id')
			$.ajax({
				url : '/member/get_member/' + id,
				data : {id : id},
				success: function(data){
					member =  JSON.parse(data)
					$('.nama_member').val(member.nama_member)
					$('.alamat').val(member.alamat)
					$('.telepon').val(member.telepon)
					$('.jk').val(member.jk)
					$('.form-member').attr('action','/member/update/'+id)
				}
			})
		})

	})
	
</script>

@endpush