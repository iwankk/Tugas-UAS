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
p {font-size:12pt; font-family:arial; text-indent:0.5in}
</style>
<div class="content"><br><br><br>
<b>
@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br />
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
		
	</ul>
</div>
@endif

<h2>Silahkan Daftar</h2>
<form action="{{ url('register') }}" method="POST">
	@csrf
	
	Nama: <input type="text" name="username" /><br/>
	Password: <input type="password" name="password" /><br/> 
	ReType Password: <input type="password" name="password_confirmation" /><br/>
	
	
	<input type="submit" value="Login" />
</form>
</div></b>