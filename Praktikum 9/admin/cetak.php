<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku Tamu</title>
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
	<li><a href="../halutama.php">Halaman Utama</a></li>
  	<li><a href="../kontak.php">Buku Tamu</a></li>
  	<li style="float:right"><a class="active" href="index.php">Admin</a></li>
</ul>
<div class="header">
	<?php
	include 'koneksi.inc.php';
	$sql="SELECT nama,email,jkel,alamat,kota,pesan FROM kontak order by nama;";

	$qry = mysqli_query($koneksi, $sql) or die ("Proses cetak gagal");
	echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
	<tr>
	<th>No</th>
	<th>Nama</th>
	<th>Email</th>
	<th>Jenis Kelamin</th>
	<th>Alamat</th>
	<th>Kota</th>
	<th>Pesan</th>";

	$no=1;
	while($hasil=mysqli_fetch_row($qry)){
		echo "<tr>
		<td>$no</td>
		<td>$hasil[0]</td>
		<td>$hasil[1]</td>
		<td>$hasil[2]</td>
		<td>$hasil[3]</td>
		<td>$hasil[4]</td>
		<td>$hasil[5]</td>
		</tr>";
		$no++;
	}

	echo "</table>";
	?>
	<br>
	<a href="../halutama.php">Kembali</a>
</div>
</body>
</html>