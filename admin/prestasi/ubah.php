<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$query_artikel = mysqli_query($koneksi, "SELECT * FROM tbl_prestasi WHERE id = $id");
$artikel = mysqli_fetch_assoc($query_artikel);

$active = 'prestasi'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Artikel - SMK Negeri 1 Wanareja</title>
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Ubah Artikel
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubah.php?id=<?= $artikel['id'] ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" value="<?= $artikel['judul'] ?>" class="form-control" id="judul" placeholder="judul artikel" autocomplete="off" required="required" name="judul">
							</div>
							
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file mb-2" id="foto" placeholder="foto artikel" autocomplete="off" name="foto">
								*gambar sebelumnya <br>
								<img src="../../images/prestasi/<?= $artikel['foto'] ?>" alt="<?= $row['judul'] ?>" width="500px" class="mt-2">
							</div>
							
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/ckeditor/ckeditor.js"></script>
</body>
</html>