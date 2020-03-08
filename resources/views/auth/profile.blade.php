@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div class="pull-left">
				<h3 class="box-title">My Profile</h3>
			</div>
			<br><br><br>
			<div class="box-body">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<form action="/profile_update" method="post">
							@csrf
							<div class="form-group">
								<label for="name">Nama Lengkap</label>
								<input type="text" class="form-control name" name="name" id="name" placeholder="Nama Lengkap" value="{{ $profile->name }}">
								@error('name')
								<small style="color:red">{{$message}}</small>
								@enderror
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control alamat" name="alamat" id="alamat" placeholder="Alamat" value="{{ $profile->alamat }}">
								@error('alamat')
								<small style="color:red">{{$message}}</small>
								@enderror
							</div>
							<div class="form-group">
								<label for="telepon">Telepon</label>
								<input type="text" class="form-control telepon" name="telepon" id="telepon" placeholder="Telepon" value="{{ $profile->telepon }}">
								@error('telepon')
								<small style="color:red">{{$message}}</small>
								@enderror
							</div>
							<div class="form-group">
								<label for="email">E-mail</label>
								<input type="text" class="form-control email" name="email" id="email" placeholder="E-mail" value="{{ $profile->email }}">
								@error('email')
								<small style="color:red">{{$message}}</small>
								@enderror
							</div>
							<div class="formel-group">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection