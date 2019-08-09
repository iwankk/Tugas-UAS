<html>
<!DOCTYPE html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<center><div class="wrap">
		<div class="header">			
			<h1><b>|Bujang Game</b></h1>
			<p><b>Toko Game terbaru harapan bangsa yang paling agung telah hadir dengan berbagai macam dvd game variasi terbaru <br>dari game terlaris sampai terhits abad ini ada disini silahkan masuk terlebih dahulu!!</b> </p>
		</div>
<style>
body { background-image: url("login.jpg"); background-size: cover; background-repeat: no-repeat; color:#FFFF00; margin-left:0.5in;}
h1 {font-size:25pt; color:#FF0000}
h2 {font-size:25pt; color:#FF0000}
p {font-size:12pt; font-family:arial; text-indent:0.5in}
</style>

<div class="content"><br><br><br>
<b>
@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br />
	<ul>
		@foreach ($errors->all () as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<h2 align="center">Silahkan Masuk</h2>

<form action="{{ url('login') }}" method="POST" align="center" >
	@csrf
	
	Username: <input type ="text" name="username" /><br/>
	Password: <input type ="password" name="password" /><br/>
	
	<h2><a  href="{{ url('/barang/') }}"> Login</a><br/></h2>
	<h2><a class="btn btn-danger" href="{{ url('/upload/') }}"> Admin</a></h2><br/>
	<p>Belum Punya Akun?</p>
	<h2><a class="btn btn-danger" href="{{ url('/register/') }}"> Daftar</a></h2>
</form>



</html>