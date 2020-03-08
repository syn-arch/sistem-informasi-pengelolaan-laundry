@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="white-box">
			<div class="pull-left">
				<h3 class="box-title">Ubah Password</h3>
			</div>
			<br><br><br>
			<div class="box-body">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<form action="/change_password_action" method="post">
							@csrf
							<div class="form-group">
								<label for="pw_lama">Password Lama</label>
								<input type="password" class="form-control pw_lama" name="pw_lama" id="pw_lama" placeholder="Password Lama" value="{{ old('pw_lama') }}">
								@error('pw_lama')
								<small style="color:red">{{$message}}</small>
								@enderror
							</div>
							<div class="form-group">
								<label for="pw1">Password Baru</label>
								<input type="password" class="form-control pw1" name="pw1" id="pw1" placeholder="Password Baru" value="{{ old('pw1') }}">
								@error('pw1')
								<small style="color:red">{{$message}}</small>
								@enderror
							</div>
							<div class="form-group">
								<label for="pw2">Konfirmasi Password Baru</label>
								<input type="password" class="form-control pw2" name="pw2" id="pw2" placeholder="Konfirmasi Password Baru" value="{{ old('pw2') }}">
								@error('pw2')
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