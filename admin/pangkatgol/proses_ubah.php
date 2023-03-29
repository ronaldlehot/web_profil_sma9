<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$jenis_pangkatgol = mysqli_real_escape_string($koneksi, $_POST['jenis_pangkatgol']);
$query = mysqli_query($koneksi, "UPDATE tbl_pangkatgol SET jenis_pangkatgol = '$jenis_pangkatgol' WHERE id = $id");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Diubah!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Diubah!';
	header('Location: index.php');
}

?>