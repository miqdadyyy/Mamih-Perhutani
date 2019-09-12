<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Pendaftaran Siswa</title>
</head>
<body>
	<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			@if(session('sukses'))
    <div class="alert alert-success" >
      {{session('sukses')}}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-success" >
      {{session('gagal')}}
    </div>
    @endif
			<br>
			<div class="card">
				<div class="card-header bg-primary text-white text-center">
					Pendaftaran Mandor
				</div>
			 	<div class="card-body">
			 	<form method="POST" action="{{url('/kirim/pendaftaran')}}">
			 		{{csrf_field()}}
			 		<div class="form-group row">
			 			<label for="subject" class="col-sm-4 col-form-label text-md-right">Nama Lengkap</label>
			 			<div class="col-md-6">
			 				<input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap">
			 			</div>
			 		</div>
			 		<div class="form-group row">
			 			<label for="subject" class="col-sm-4 col-form-label text-md-right">Email</label>
			 			<div class="col-md-6">
			 				<input type="email" id="email" class="form-control" name="email">
			 			</div>
			 		</div>
			 		<div class="form-group row">
			 			<label for="subject" class="col-sm-4 col-form-label text-md-right">nohp</label>
			 			<div class="col-md-6">
			 				<input type="text" id="nohp" class="form-control" name="nohp">
			 			</div>
			 		</div>
			 		
			 		
			 		<div class="form-group row">
			 			<label for="subject" class="col-sm-4 col-form-label text-md-right">alamat</label>
			 			<div class="col-md-6">
			 				<input type="text" id="alamat" class="form-control" name="alamat">
			 			</div>
			 		</div>
			 		<div class="form-group row">
			 			<label for="subject" class="col-sm-4 col-form-label text-md-right">Password</label>
			 			<div class="col-md-6">
			 				<input type="text" id="password_req" class="form-control" name="password">
			 			</div>
			 		</div>
			 		
			 		<div class="col-md-8 offset-md-4">
			 			<button type="submit" class="btn btn-primary">
			 				Kirim Pendaftaran
			 			</button>
			 		</div>
			 	</form>
			 	</div>
			 	</div>
			</div>
		</div>
	</div>
</body>
</html>