<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';
$nama_kelas = mysqli_real_escape_string($koneksi, isset($_POST['nama_kelas']) ? $_POST['nama_kelas'] : '');
$query = mysqli_query($koneksi, "INSERT INTO tbl_kelas (nama_kelas) VALUES ('$nama_kelas')");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
	header('Location: index.php');
}