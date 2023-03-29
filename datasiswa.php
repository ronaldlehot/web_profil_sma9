<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT tbl_siswa.id, tbl_siswa.nama, tbl_siswa.no_hp, tbl_siswa.foto, tbl_siswa.alamat, tbl_jurusan.nama_jurusan AS jurusan FROM tbl_siswa LEFT JOIN tbl_jurusan ON tbl_siswa.id_jurusan = tbl_jurusan.id");
$aktif = 'siswa';
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA Negeri 9 Kupang</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css" />

    <link rel="stylesheet" href="style.css" />

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Link Data Table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css" />

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>
  
  </head>

  <body>
    <!-- NAVIGATION -->
    <?php include 'header.php'; ?>

    <!-- HOME -->
    <section id="tentang-home">
      <h2>Data Siswa</h2>
    </section>

   	<!-- content -->
		<div class="row p-3" style="width: 150%;">
			<div class="col-md-8">
				<!-- <div class="title mb-3">
					Daftar Siswa
				</div> -->
				<table id="table_id" class="dataTable table table-bordered">
				    <thead>
				        <tr>
				            <th>No</th>
				            <th width="50px">Foto</th>
				            <th>Nama</th>
				            <th>Kelas</th>
				            <th>Alamat</th>
				        </tr>
				    </thead>
				    <tbody>
				       <?php while($row = mysqli_fetch_assoc($query)) : ?>
				       		<tr>
				       			<td><?= $no++ ?></td>
				       			<td><img src="images/siswa/<?= $row['foto'] ?>" alt="<?= $row['nama'] ?>" width="100%" class="img-thumbnail"></td>
				       			<td><a href="detail_siswa.php?id=<?= $row['id'] ?>"><?= $row['nama'] ?></a></td>
				       			<td><?= $row['jurusan'] ?></td>
				       			<td><?= $row['alamat'] ?></td>
				       		</tr>
				       <?php endwhile; ?>
				    </tbody>
				</table>
			</div>

      <?php include 'footer.php' ?>
    

    <script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/datatables/datatables.min.js"></script>
	<script src="resources/datatables/datatable.js"></script>
    <script>
      $(document).ready(function () {
        $('#example').DataTable();
      });
    </script>
  
  </body>
</html>
