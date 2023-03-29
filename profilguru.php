<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT id, nama, alamat, foto, no_hp, mata_pelajaran, nip FROM tbl_guru");
$aktif = 'guru';
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMA Negeri 9 Kupang</title>
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.1/css/all.css" />
    <!-- Link Box Icon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Link JS -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <!-- Link JS -->
    <script src="main.js"></script>
    <!-- BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Link JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  </head>
  <body>
    <!-- NAVIGATION -->
    <?php include 'header.php'; ?>

   
  <!-- HOME -->
    <section id="tentang-home">
      <h2>Data Guru</h2>
    </section>
   
		<div class="row p-3" style="width: 150%;">
			<div class="col-md-8">
				<!-- <div class="title mb-3">
					Daftar Guru
				</div> -->
				<table id="table_id" class="dataTable table table-bordered">
				    <thead>
				        <tr>
				            <th>No</th>
				            <th width="50px">Foto</th>
                    <th>NIP</th>
				            <th>Nama</th>
				            <th>Mata Pelajaran</th>
                    <th>pangkat/Golongan</th>
				           
				        </tr>
				    </thead>
				    <tbody>
				        <?php while($row = mysqli_fetch_assoc($query)) : ?>
							<tr>
								<td><?= $no++ ?></td>
								<td><img src="images/guru/<?= $row['foto'] ?>" alt="" width="100%" class="img-thumbnail"></td>
                <td><?= $row['nip'] ?></td>
								<td><a href="detail_guru.php?id=<?= $row['id'] ?>"><?= $row['nama'] ?></a></td>
								<td><?= $row['mata_pelajaran'] ?></td>
                <td><?= $row['mata_pelajaran'] ?></td>
								
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

    <script src="main.js"></script>
    <script>
      $(document).ready(function () {
        $('.num').counterup({
          Delay: 10,
          time: 1200,
        });
      });
    </script>
   
  </body>
</html>
