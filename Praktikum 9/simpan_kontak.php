<?php
include("koneksitugas.php");
$nama = $_POST['nama'];
$email = $_POST['email'];
$jkel = $_POST['jkel'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO kontak(nama,email,jkel,alamat,kota,pesan) values ('$nama','$email','$jkel','$alamat','$kota','$pesan')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location:kontak.php');
?>