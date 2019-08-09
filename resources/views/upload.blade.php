<!DOCTYPE html>
<html>
<head>
	<title>Database Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Bujang Game</h2>
			
			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error) 
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<b>File Gambar Game</b><br/>
						<input type="file" name="file">
					</div>
					
					<div class="form-group">
						<b>Nama Game</b>
						<textarea class="form-control" name="nama_barang"></textarea>
					</div>
					
					<div class="form-group">
						<b>Jumlah</b>
						<textarea class="form-control" name="jumlah"></textarea>
					</div>
					
					<div class="form-group">
						<b>Harga</b>
						<textarea class="form-control" name="harga"></textarea>
					</div>
					<td><a class="btn btn-danger" href="{{ url('/barang/') }}">upload</a></td>

					
				</form>
				
				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">Game</th>
							<th>Nama Game</th>
							<th>jumlah</th>
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
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $g->id }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>