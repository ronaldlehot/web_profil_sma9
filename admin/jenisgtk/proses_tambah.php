<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$jenis_gtk = mysqli_real_escape_string($koneksi, isset($_POST['jenis_gtk']) ? $_POST['jenis_gtk'] : '');
$query = mysqli_query($koneksi, "INSERT INTO tbl_jenisgtk (jenis_gtk) VALUES ('$jenis_gtk')");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
	header('Location: index.php');
}