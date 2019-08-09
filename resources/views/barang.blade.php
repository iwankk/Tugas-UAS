<!DOCTYPE html>
<html>

<head>
	<title>Bujang Game</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
body { background-image: url("login.jpg"); background-size: cover; background-repeat: no-repeat; color:#FFFF00; margin-left:0.5in;}
h1 {font-size:25pt; color:#FF0000}
p {font-size:12pt; font-family:arial; text-indent:0.5in}
</style>
<body>
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Bujang Shop</h2>
			
			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error) 
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
				
				<h4 class="my-5"align="center">Daftar Game</h4>
				<a class="btn btn-danger" href="{{ url('/login/') }}">Masuk</a>
				
				
				'
				<table class="table table-bordered table-striped" bgcolor="white">
					<thead>
						<tr>
							<th width="1%">Game PS4</th>
							<th>Judul Game</th>
							<th>Stock</th>
							<th>Harga</th>
							<th width="1%">Pilihan</th>
						</tr>
					</thead>
					<tbody>
						@foreach($gambar as $g)
						<tr>
							<td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
							<td>{{$g->nama_barang}}</td>
							<td>{{$g->jumlah}}</td>
							<td>{{$g->harga}}</td>
							<td><a class="btn btn-danger" href="{{ url('/kurir/') }}">Lanjut</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<a class="btn btn-danger" href="{{ url('/login/') }}">Keluar</a>
			</div>
		</div>
	</div>
</body>
</html>