<!DOCTYPE html>
<html>
<head>
	<title>Isi Buku Tamu</title>
	<style type="text/css">
		body {
			background-color: #CCED28;
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}
		li {
		  	float: left;
		}
		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		li a:hover:not(.active) {
		  	background-color: #111;
		}
		.active {
		  	background-color: #4CAF50;
		}
		.header {
			padding: 80px;
			text-align: center;
			display: flex;
			justify-content: center;
			height: 60vh;
			flex-direction: column;
			align-items: center;
		}
		.header h1 {
			display: block;
  			font-size: 40px;
		}
	</style>
</head>
<body>
<ul>
	<li><a href="halutama.php">Halaman Utama</a></li>
  	<li><a class="active" href="kontak.php">Buku Tamu</a></li>
  	<li style="float:right"><a href="admin/index.php">Admin</a></li>
</ul>
<center><H1>Buku Tamu</H1></center><br>
	<form method="POST" action="simpan_kontak.php">
		<table width="500" align="center" cellpadding="5" cellspacing="10">
		<tr>
			<td>Nama</td>
			<td> :</td>
			<td><input type="text" name="nama"></input></td>
		</tr>
		<tr>
			<td>Email</td>
			<td> :</td>
			<td><input type="email" name="email"></input></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td> :</td>
			<td><input type="radio" name="jkel" value="laki-laki">Laki - Laki</input>
				<input type="radio" name="jkel" value="perempuan">Perempuan</input>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td> :</td>
			<td><input type="text" name="alamat"></input></td>
		</tr>
		<tr>
			<td>Kota</td>
			<td> :</td>
			<td><input type="text" name="kota"></input></td>
		</tr>
		<tr>
			<td>Pesan</td>
			<td> :</td>
			<td><textarea name="pesan" cols="25" rows="5"></textarea></td>
		</tr>
		<tr><br></tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Submit">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
</body>
</html>