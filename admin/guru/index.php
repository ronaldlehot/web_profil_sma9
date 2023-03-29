<?php 
require_once '../../koneksi.php';


$query = mysqli_query($koneksi, "SELECT tbl_guru.id, tbl_guru.nama, tbl.nip, tbl_guru.alamat,tbl_guru.foto,tbl_guru.no_hp,tbl_guru.mata_pelajaran, tbl_pangkatgol.jenis_pangkatgol AS pangkatgol FROM tbl_guru LEFT JOIN tbl_pangkatgol ON tbl_guru.id_pangkatgol = tbl_pangkatgol.id");
$no = 1;
$active = 'master';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Guru - SMK Negeri 1 Wanareja</title>
	<link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">

	<style> 
		.aksi {
			display: flex;
		
		}
	</style>
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
								Daftar Guru
							</div>
							<div class="float-right">
								<a href="tambah.php">Tambah</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<?php if(isset($_SESSION['sukses'])) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php unset($_SESSION['sukses']) ?>
						<?php elseif(isset($_SESSION['gagal'])) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php unset($_SESSION['gagal']) ?>
						<?php endif; ?>
						<table id="table_id" class="dataTable table table-bordered">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th width="50px">Foto</th>
									
									
						            <th>Nama</th>
									<th>Nip</th>
						            <th>No HP</th>
									<th>pangkatgol</th>
						            <th>Mata Pelajaran</th>
						            <th>Alamat</th>
						            <th>Aksi</th>
						        </tr>
						    </thead>
						    <tbody>
						        <?php while($row = mysqli_fetch_assoc($query)) : ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><img src="../../images/guru/<?= $row['foto'] ?>" alt="" width="100%" class="img-thumbnail"></td>
										<td><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['nama'] ?></a></td>
										<td><?= $row['nip'] ?></td>
										<td><?= $row['no_hp'] ?></td>
										<td><?= $row['pangkatgol'] ?></td>
										<td><?= $row['mata_pelajaran'] ?></td>
										<td><?= $row['alamat'] ?></td>
										<td class="aksi">
											<a href="ubah.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">Ubah</a>
											<a style="margin-left: 3%;" href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a>
										</td>
									</tr>
								<?php endwhile; ?>
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/datatables/datatables.min.js"></script>
	<script src="../../resources/datatables/datatable.js"></script>
</body>
</html>