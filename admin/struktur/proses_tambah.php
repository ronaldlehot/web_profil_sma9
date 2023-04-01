<?php 

if(!isset($_POST['tambah'])) header('Location: tambah.php');


require_once '../../koneksi.php';

// persiapan upload foto
$ekstensi = $_FILES['foto']['name'];
$ekstensi = pathinfo($ekstensi, PATHINFO_EXTENSION);

$nama_foto = $tanggal . '-';
$nama_foto = $nama_foto . strtolower($judul);
$nama_foto = str_replace(' ', '-', $nama_foto) . '.' . $ekstensi;


$asal = $_FILES['foto']['tmp_name'];
$tujuan = '../../images/struktur/';

if($_FILES['foto']['error'] == 0){
	if($_FILES['foto']['size'] < 1000000){
		if (file_exists('../../images/struktur/' . $nama_foto)) unlink('../../images/struktur/' . $nama_foto);

		$query = mysqli_query($koneksi, "INSERT INTO tbl_struktur (foto) VALUES( '$nama_foto' )") or die(mysqli_error($koneksi));
		move_uploaded_file($asal, $tujuan . $nama_foto) or die('gagal upload foto');
		if($query){
			$_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
			header('Location: index.php');
		} else {
			$_SESSION['gagal'] = 'Data Gagal Ditambahkan!';
			header('Location: index.php');
		}
	} else {
		$_SESSION['gagal'] = 'ukuran gambar tidak boleh lebih dari 1000kb!';
		header('Location: index.php');
	}
}