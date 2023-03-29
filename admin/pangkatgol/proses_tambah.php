<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$jenis_pangkatgol = mysqli_real_escape_string($koneksi, isset($_POST['jenis_pangkatgol']) ? $_POST['jenis_pangkatgol'] : '');
$query = mysqli_query($koneksi, "INSERT INTO tbl_pangkatgol (jenis_pangkatgol) VALUES ('$jenis_pangkatgol')");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
	header('Location: index.php');
}