<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
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
	<li><a class="active" href="halutama.php">Halaman Utama</a></li>
  	<li><a href="kontak.php">Buku Tamu</a></li>
  	<li style="float:right"><a href="admin/index.php">Admin</a></li>
</ul>

<div class="header">
	<h1>Selamat Datang</h1>
	<p>Silahkan Isi <a href="kontak.php">Disini</a></p>
</div>
<!-- <center><H1>Selamat Datang</H1></center><br>
<center><h1>Silahkan Isi <a href="kontak.php">Disini</a></h1></center> -->
</body>
</html>