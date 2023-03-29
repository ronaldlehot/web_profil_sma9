<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$nama_kelas = mysqli_real_escape_string($koneksi, $_POST['nama_kelas']);
$query = mysqli_query($koneksi, "UPDATE tbl_kelas SET nama_kelas = '$nama_kelas' WHERE id = $id");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Diubah!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Diubah!';
	header('Location: index.php');
}

?>