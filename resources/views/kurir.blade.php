<!DOCTYPE html>
<html>
<head>
	<title>Database Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>
body { background-image: url("login.jpg"); background-size: cover; background-repeat: no-repeat; color:#FFFF00; margin-left:0.5in;}
h1 {font-size:25pt; color:#FF0000}
h2 {font-size:25pt; color:#FF0000}
p {font-size:12pt; font-family:arial; text-indent:0.5in}
</style>
<body>

	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Bujang Game</h2>
			<p> Pilih kurir pengiriman yang anda inginkan : </p>
			
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

					
					<td><a class="btn btn-danger" href="{{ url('/konsumen/') }}" align="center">JNE</a></td>
					<td><a class="btn btn-danger" href="{{ url('/konsumen/') }}" align="center">JNT</a></td>
					<td><a class="btn btn-danger" href="{{ url('/konsumen/') }}" align="center">Tiki</a></td>
					<td><a class="btn btn-danger" href="{{ url('/konsumen/') }}" align="center">POS</a></td>

					
				</form>
				
				
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>